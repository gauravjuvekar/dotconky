conky.config = {
	background = false,
		update_interval = 1,
		cpu_avg_samples = 2,
		net_avg_samples = 2,

		override_utf8_locale = true,
		double_buffer = true,
		no_buffers = true,
		text_buffer_size = 2048,

-- Window specifications
		own_window = true,
		own_window_class = 'Conky',
		own_window_type = 'desktop',
		own_window_transparent = true,
        own_window_hints = 'undecorated,below,sticky,skip_taskbar,skip_pager',
		own_window_argb_visual = true,

		border_inner_margin = 0,
		border_outer_margin = 0,
		alignment = 'top_left',
		minimum_width = 1918,
        gap_x = <?php echo 0 + (int) shell_exec( "xrandr | grep primary |
                                            cut -f4 -d' ' | cut -f2 -d'+'");
                    ?>,
        gap_y =  <?php echo 890 + (int)shell_exec( "xrandr | grep primary |
                                               cut -f4 -d' ' | cut -f3 -d'+'");
                       ?>,
        xinerama_head = 2,

-- Graphics settings
		draw_shades = false,
		draw_outline = false,
		draw_borders = false,
		draw_graph_borders = false,

-- Text settings
		use_xft = true,
		font = 'Ubuntu:size=1',
		xftalpha = 0.5,
		uppercase = false,
		temperature_unit = 'celsius',

		default_color = '#FFFFFF',

-- Lua Load
		lua_load = '~/.conky/helper.lua',
		lua_draw_hook_pre = 'draw_bg',
		lua_draw_hook_post = 'clock_rings',

};
conky.text = [[
${voffset 8   }${goto 60 }${color FFFFFF}${font Ubuntu:size=16}${time %A}${font}
${voffset 0   }${goto 60 }${color FFFFFF}${font Ubuntu:size=18}${time %b}${font}
${voffset 0   }${goto 60 }${color FFFFFF}${font Ubuntu:size=20}${time %Y}${font}
${voffset -50 }${goto 140}${color FFFFFF}${font Ubuntu:size=50}${time %e}${font}
${voffset 0   }${goto 60 }${color FFFFFF}${font Ubuntu:size=40}${time %H} : ${time %M}${font}
${voffset 20  }${goto 60 }${color FFFFFF}${font Ubuntu:size=18}${utime } UTC
${voffset -140}${color FFFFFF}${font Ubuntu:size=15}${goto 430}CPU${goto 575}MEM${goto 727}DISK${goto 882}ETH${goto 1020}WLAN${font}
${voffset 52  }${goto 420}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu0}${font}
${voffset 0   }${goto 420}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu1}${font}
${voffset 0   }${goto 420}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu2}${font}
${voffset 0   }${goto 420}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu3}${font}
${voffset -60 }${goto 444}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu4}${font}
${voffset 0   }${goto 444}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu5}${font}
${voffset 0   }${goto 444}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu6}${font}
${voffset 0   }${goto 444}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu7}${font}
${voffset -60 }${goto 468}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu8}${font}
${voffset 0   }${goto 468}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu9}${font}
${voffset 0   }${goto 468}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu10}${font}
${voffset 0   }${goto 468}${color FFFFFF}${font Ubuntu Mono:size=12}${cpu cpu11}${font}
${voffset -60 }${goto 525}${color FFFFFF}${font Ubuntu Mono:size=12}     RAM : ${memperc }%${font}
${voffset 0   }${goto 525}${color FFFFFF}${font Ubuntu Mono:size=12}    Swap : ${swapperc}%${font}
${voffset 0   }${goto 525}${color FFFFFF}${font Ubuntu Mono:size=12}Buffered : ${buffers }${font}
${voffset 0   }${goto 525}${color FFFFFF}${font Ubuntu Mono:size=12}  Cached : ${cached  }${font}
${voffset -60 }${goto 700}${color FFFFFF}${font Ubuntu Mono:size=12}    / : ${fs_used_perc     /}%${font}
${voffset 0   }${goto 700}${color FFFFFF}${font Ubuntu Mono:size=12}/home : ${fs_used_perc /home}%${font}
${voffset 0   }${goto 700}${color FFFFFF}${font Ubuntu Mono:size=12}    W : ${diskio_write       }${font}
${voffset 0   }${goto 700}${color FFFFFF}${font Ubuntu Mono:size=12}    R : ${diskio_read        }${font}
${voffset -60 }${goto 872}${color FFFFFF}${font Ubuntu Mono:size=12}DS : ${downspeed enp0s31f6}${font}
${voffset 0   }${goto 872}${color FFFFFF}${font Ubuntu Mono:size=12}US : ${upspeed   enp0s31f6}${font}
${voffset 0   }${goto 872}${color FFFFFF}${font Ubuntu Mono:size=12}TD : ${totaldown enp0s31f6}${font}
${voffset 0   }${goto 872}${color FFFFFF}${font Ubuntu Mono:size=12}TU : ${totalup   enp0s31f6}${font}
${voffset -60 }${goto 1022}${color FFFFFF}${font Ubuntu Mono:size=12}DS : ${downspeed wlp0s20f3}${font}
${voffset 0   }${goto 1022}${color FFFFFF}${font Ubuntu Mono:size=12}US : ${upspeed   wlp0s20f3}${font}
${voffset 0   }${goto 1022}${color FFFFFF}${font Ubuntu Mono:size=12}TD : ${totaldown wlp0s20f3}${font}
${voffset 0   }${goto 1022}${color FFFFFF}${font Ubuntu Mono:size=12}TU : ${totalup   wlp0s20f3}${font}
${voffset -162}${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}  Top ${top     pid 1} ${top     name 1}${font}
${voffset 0   }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top     pid 2} ${top     name 2}${font}
${voffset 0   }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top     pid 3} ${top     name 3}${font}
${voffset 0   }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top     pid 4} ${top     name 4}${font}
${voffset 0   }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top     pid 5} ${top     name 5}${font}
${voffset 12  }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12} MTop ${top_mem pid 1} ${top_mem name 1}${font}
${voffset 0   }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top_mem pid 2} ${top_mem name 2}${font}
${voffset 0   }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top_mem pid 3} ${top_mem name 3}${font}
${voffset 0   }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top_mem pid 4} ${top_mem name 4}${font}
${voffset 0   }${goto 1150}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top_mem pid 5} ${top_mem name 5}${font}
${voffset -162}${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}IOtop ${top_io  pid 1} ${top_io  name 1}${font}
${voffset 0   }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top_io  pid 2} ${top_io  name 2}${font}
${voffset 0   }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top_io  pid 3} ${top_io  name 3}${font}
${voffset 0   }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top_io  pid 4} ${top_io  name 4}${font}
${voffset 0   }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}      ${top_io  pid 5} ${top_io  name 5}${font}
${voffset 12  }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}   Uptime : ${uptime_short     }${font}
${voffset 0   }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}Processes : ${processes        } / ${threads} : threads${font}
${voffset 0   }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}  Running : ${running_processes}${font}
${voffset 0   }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12} Load avg : ${loadavg          }${font}
${voffset 0   }${goto 1450}${color FFFFFF}${font Ubuntu Mono:size=12}     Temp : ${acpitemp         }°C ${hwmon 0 temp 1}°C ${hwmon 1 temp 1}°C ${hwmon 3 temp 1}°C ${hwmon 4 temp 1}°C${font}
]];
