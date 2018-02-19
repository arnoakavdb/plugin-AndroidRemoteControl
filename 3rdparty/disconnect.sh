#!/bin/bash

if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi;
echo "########### Disconnect from $1 ##########"
$sudo_prefix adb disconnect $1
