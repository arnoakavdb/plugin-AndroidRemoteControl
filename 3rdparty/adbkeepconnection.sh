#!/bin/bash

if [[ $EUID -ne 0 ]]; then
  sudo_prefix=sudo;
fi
result=$sudo_prefix adb devices | grep $1 | cut -f2 | xargs
while sleep $2
do
if [ $result -neq 'device' ]
then
  $sudo_prefix adb connect $1
fi
done
