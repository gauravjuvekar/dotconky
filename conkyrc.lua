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
		alignment = 'bottom_left',
		minimum_width = 1918,
		gap_x = 0,
		gap_y = 50,

-- Graphics settings
		draw_shades = false,
		draw_outline = false,
		draw_borders = false,
		draw_graph_borders = false,

-- Text settings
		use_xft = true,
		font = 'Ubuntu:size=8',
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
${voffset 8}${goto 60}${color FFFFFF}${font Ubuntu:size=16}${time %A}
${voffset 0}${goto 60}${color FFFFFF}${font Ubuntu:size=18}${time %b}
${voffset 0}${goto 60}${color FFFFFF}${font Ubuntu:size=20}${time %Y}
${voffset -65}${goto 140}${color FFFFFF}${font Ubuntu:size=50}${time %e}${voffset 0}
${voffset -20}${goto 60}${color FFFFFF}${font Ubuntu:size=40}${time %H} : ${time %M}
${voffset -23}${goto 60}${color FFFFFF}${font Ubuntu:size=18}${utime } UTC
${voffset -140}${color FFFFFF}${font Ubuntu:size=15}${goto 430}CPU${goto 575}MEM${goto 727}DISK${goto 882}ETH${goto 1020}WLAN
${voffset 35}${color FFFFFF}${font Ubuntu Mono:size=12}${goto 440}${cpu cpu0}%${goto 505}       RAM : ${memperc }%${goto 695}    / : ${fs_used_perc     /}%${goto 865}DS : ${downspeed enx00e04c361a38}${goto 1015}DS : ${downspeed wlp2s0}
${voffset 0 }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 440}${cpu cpu1}%${goto 505}      Swap : ${swapperc}%${goto 695}/home : ${fs_used_perc /home}%${goto 865}US : ${upspeed   enx00e04c361a38}${goto 1015}US : ${upspeed   wlp2s0}
${voffset 0 }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 440}${cpu cpu2}%${goto 505}  Buffered : ${buffers  }${goto 695}    W : ${diskio_write       }${goto 865}TD : ${totaldown enx00e04c361a38}${goto 1015}TD : ${totaldown wlp2s0}
${voffset 0 }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 440}${cpu cpu3}%${goto 505}    Cached : ${cached   }${goto 695}    R : ${diskio_read        }${goto 865}TU : ${totalup   enx00e04c361a38}${goto 1015}TU : ${totalup   wlp2s0}
${voffset -150}${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150}  Top ${top     pid 1} ${top     name 1}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150}      ${top     pid 2} ${top     name 2}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150}      ${top     pid 3} ${top     name 3}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150} Mtop ${top_mem pid 1} ${top_mem name 1}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150}      ${top_mem pid 2} ${top_mem name 2}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150}      ${top_mem pid 3} ${top_mem name 3}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150}IOtop ${top_io  pid 1} ${top_io  name 1}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150}      ${top_io  pid 2} ${top_io  name 2}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1150}      ${top_io  pid 3} ${top_io  name 3}
${voffset -150}${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1450}   Uptime : ${uptime_short     }
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1450}Processes : ${processes        } / ${threads}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1450}  Running : ${running_processes}
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1450} Load avg : ${loadavg          }
${voffset 0   }${color FFFFFF}${font Ubuntu Mono:size=12}${goto 1450}     Temp : ${acpitemp         }°C
]];
