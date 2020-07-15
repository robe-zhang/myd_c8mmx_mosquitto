#!/bin/bash

mosquitto_sub -h 47.103.3.155 -t c8mmx/led/green/brightness > /sys/class/leds/cpu/brightness &
mosquitto_sub -h 47.103.3.155 -t c8mmx/led/green/trigger > /sys/class/leds/cpu/trigger  &
mosquitto_sub -h 47.103.3.155 -t c8mmx/led/blue/brightness > /sys/class/leds/user/brightness &
mosquitto_sub -h 47.103.3.155 -t c8mmx/led/blue/trigger > /sys/class/leds/user/trigger  &
