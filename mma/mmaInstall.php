<?php
ini_set("open_basedir",NULL);
/* Install Script
 * @package MobileMinerApp Addon for MinePeon
 * @author  Henry Williams / me@tk1337
 * @version 1.0a
 * @date    2013-10-16
 */

/* append cron jobs to minepeon crontab */
exec('echo "# MobileMinerApp crons" >> /var/spool/cron/minepeon');
exec('echo "*/1 * * * * /usr/bin/php /home/minepeon/addons/mma/mobileminerapp.cron.php update" >> /var/spool/cron/minepeon');
exec('echo "*/2 * * * * /usr/bin/php /home/minepeon/addons/mma/mobileminerapp.cron.php check" >> /var/spool/cron/minepeon');
//$file   = fopen("/var/spool/cron/minepeon",'a') or die("Can not open cron file");
//$lines  ="\n#MobileMinerApp Crons
// */1 * * * * /usr/bin/php /home/minepeon/addons/mma/mobileminerapp.cron.php update
// */2 * * * * /usr/bin/php /home/minepeon/addons/mma/mobileminerapp.cron.php check";
// fwrite($file,$lines);



/* open minepeon configuration */
$file   = "/opt/minepeon/etc/minepeon.conf";
$open   = fopen($file,'r') or die("Can not open minepeon.conf");
$data   = fread($open,filesize($file));
$conf   = json_decode($data,true);
if(is_array($conf)){
  $conf['mma_enabled']      = true;
  $conf['mma_userEmail']    = $argv[1];
  $conf['mma_appKey']       = $argv[2];
  if(@$argv[2]){
    $conf['mma_machineName']  = $argv[3];
  }
  
  $write = fopen($file,'w');
  fwrite($write,json_encode($conf,JSON_PRETTY_PRINT));
  fclose($write);
}

?>
