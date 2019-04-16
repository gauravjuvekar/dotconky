#!/bin/bash

primary=$(xrandr | grep primary | cut -f4 -d' ')
x_offset=$(echo "$primary" | cut -f2 -d'+')
y_offset=$(echo "$primary" | cut -f3 -d'+')

echo "$x_offset"
echo "$y_offset"
