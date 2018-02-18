#!/bin/bash

if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi
echo "########### Connect to $1 ##########"
echo `$sudo_prefix adb connect $1`
