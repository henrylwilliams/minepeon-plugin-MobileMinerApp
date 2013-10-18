MinePeon Addons
==============
I'm working on getting other add-on's I've created moved to this repo with an installation script for each add-on; If there are add-ons you would like to see in the future, please let me know.

What is MinePeon?
==============
MinePeon is a linux distribution based off of Arch Linux for the RaspberryPi (http://raspberrypi.org); MinePeon was created by TheMineForeman. For more information relating to the MinePeon project including downloads & user forums, please go here http://minepeon.com/.

If you enjoy using MinePeon, I suggest you give a small donation for TheMineForman to support his efforts with the project, information about donations to the project can be found here http://minepeon.com/index.php/Donate/.


Available Add-ons
==============
###MobileMinerApp Addon
Instructions to install MobileMinerApp add-on for MinePeon:
  
```
cd /opt/minepeon/http/

git clone https://github.com/labmixz/MinePeonAddons.git addons

sudo php /opt/minepeon/http/addons/mma/mmaInstall.php [mma_email] [mma_appkey] [optional_machine_name]
```

######Example:

```sudo /usr/bin/php /opt/minepeon/http/addons/mma/mmaInstall.php me@tk1337.com kEyA-KeYb-kEyC testPeon```


To sign up for your appKey go to http://www.mobileminerapp.com

=============
