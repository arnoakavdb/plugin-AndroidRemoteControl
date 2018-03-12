
#!/bin/bash

if [[ $EUID -ne 0 ]];
then
  sudo_prefix=sudo
fi

while sleep $2
do
result=$sudo_prefix adb devices | grep $1 | cut -f2 | xargs
if [[ $result -ne 'device' ]]
then
  $sudo_prefix adb connect $1
fi
done
