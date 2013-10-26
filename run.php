<?php
/* Cron Script
 * @package MobileMinerApp Addon for MinePeon
 * @author  Henry Williams / me@tk1337
 * @version 1.6a
 * @date    2013-10-24
 */
include '/opt/minepeon/http/mma/mobileminerapp.inc.php';
$mma  = new mobileMinerApp();

if(@$argv[1]){
  switch($argv[1]){
    case "installcron":
      $mma->installCron();
      break;
    
    case "installconf":
      $settings = array("email"=>$argv[2],"key"=>$argv[3]);
      if(@$argv[4]){$settings["name"]=$argv[4];}
      $mma->installConf($settings);
      break;
    
    case "uninstall":
      $mma->uninstall();
    default:
      exit("No valid arguments were passed. Must be either update or check.");
  }
}else{
  exit("No valid arguments were passed. Must be either update or check.");
}
?>