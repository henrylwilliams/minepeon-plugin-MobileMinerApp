<?php
/* Cron Script
 * @package MobileMinerApp Addon for MinePeon
 * @author  Henry Williams / me@tk1337
 * @version 1.0a
 * @date    2013-10-16
 */
include '/opt/minepeon/http/mma/mobileminerapp.inc.php';
$mma  = new mobileMinerApp();

if(@$argv[1]){
  switch($argv[1]){
    case "update":
      $mma->cronUpdate();
      break;
    
    case "check":
      $mma->cronCheck();
      break;
    
    case "installcron":
      try{
        $mma->installCron();
      }catch(Exception $e){
        echo "\n\nError(s) occurred:\n\n".$e->getMessage()."\n\n";
      }
      break;
    
    case "installconf":
      try{
        $mma->installConf($argv);
      }catch(Exception $e){
        echo "\n\nError(s) occurred:\n\n".$e->getMessage()."\n\n";
      }
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
