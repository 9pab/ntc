<?php

$empid = "empid";
$route = $_GET["r"];
$seat = $_GET["s"];
date_default_timezone_set("Asia/Bangkok");
$date = date("Y/m/d - H:i:s");

if(!isset($_COOKIE[$empid])) {
    echo "Cookie named '" . $empid . "' is not set!<br>";
  } else {
    echo "Cookie '" . $empid . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$empid];
  }
  
    echo "สายรถ : " . $route . " หมายเลขที่นั่ง : " . $seat . " วันที่/เวลา : " . $date;

?>