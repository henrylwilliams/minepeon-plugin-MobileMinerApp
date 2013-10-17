<?php


/* append cron jobs to minepeon crontab */
$file   = fopen("/var/spool/cron/minepeon",'a') or die("Can not open cron file");
$lines  ="#MobileMinerApp Crons\n
          */1 * * * * /usr/bin/php /home/minepeon/addons/mma/mobileminerapp.cron.php update\n
          */2 * * * * /usr/bin/php /home/minepeon/addons/mma/mobileminerapp.cron.php check";
fwrite($file,$lines);
unset($file);
unset($lines);
?>