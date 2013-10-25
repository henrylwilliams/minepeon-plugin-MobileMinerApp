#!/bin/bash

echo "$c2            _                                   "
echo "$c2           (_)                                  "
echo "$c2  _ __ ___  _ _ __   ___ _ __   ___  ___  _ __  "
echo "$c2 |  _   _ \| |  _ \ / _ \  _ \ / _ \/ _ \|  _ \ "
echo "$c2 | | | | | | | | | |  __/ |_) |  __/ (_) | | | |"
echo "$c2 |_| |_| |_|_|_| |_|\___|  __/ \___|\___/|_| |_|"
echo "$c2                        | |                     "
echo "$c2                        |_| MobileMinerApp Addon"
echo "$c2                              by Henry W./tk1337"
echo
echo "This will install the MobileMinerApp plugin for MinePeon."
echo "It will require sudo access to install the service and ask"
echo "you for your password."
echo
echo "** You will need to register your email with mobileminerapp.com"
echo "to receive an application key for this service to work. **"
echo
echo "Updates to MobileMinerApp's servers happen every one (1) minute, if"
echo "your system does not instantly show up within your application after"
echo "installing this plugin, please allow it some time."
echo

read -p "Continue installation of MobileMinerApp plugin? [y/n]" -n 1 -r
echo ""
if [[ $REPLY =~ ^[Yy]$ ]]
then

  mkdir -p /opt/minepeon/http/mma
  cp -rf mma /opt/minepeon/http/mma


sudo /usr/bin/php /opt/minepeon/http/mma/mobileminerapp.inc.php installcron
sudo /usr/bin/php /opt/minepeon/http/mma/mobileminerapp.inc.php installconf

echo "If no errors appeared, installation was successful!"
echo ""
