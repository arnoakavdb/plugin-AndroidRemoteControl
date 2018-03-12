#!/bin/bash
if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi
echo $sudo_prefix;
while sleep $2
do
result="$($sudo_prefix adb devices | grep $1 | cut -f2 | xargs)";
if [[ $result == "device" ]]; then
  #$sudo_prefix adb kill-server
  #$sudo_prefix rm /tmp/5037;
  #$sudo_prefix adb start-server
  echo $1 connected;
else
  $sudo_prefix adb connect $1;
fi
done
