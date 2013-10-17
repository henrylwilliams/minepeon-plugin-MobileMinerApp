<?php
/* MobileMinerApp Addon for MinePeon
 * @author  Henry Williams / me@tk1337
 * @version 1.0a
 * @date    2013-10-16
 */
include '/home/minepeon/addons/mma/mobileminerapp.inc.php';
$mma  = new mobileMinerApp();

if(@$argv[1]){
  if($argv[1] == "update"){
    $mma->cronUpdate();
  }elseif($argv[1] == "check"){
    $mma->cronCheck();
  }
}else{
  exit("No valid arguments were passed. Must be either update or check.");
}
?>