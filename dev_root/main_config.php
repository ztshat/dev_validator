<?php
$s_domain = "https://c-validator.com:";
$s_web_root = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR;
$s_v_app_root = $s_web_root."validator".DIRECTORY_SEPARATOR;
$b_do_debug = false;		     //do debug global
$b_use_access_wall = true;   //login required

if($b_do_debug){
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
}
?>