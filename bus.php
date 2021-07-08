<?php

$empid = "empid";

if(!isset($_COOKIE[$empid])) {
    echo "Cookie named '" . $empid . "' is not set!";
  } else {
    echo "Cookie '" . $empid . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$empid];
  }
  
    date_default_timezone_set("Asia/Bangkok");
    echo "สายรถ : " . $_GET["route"] . " หมายเลขที่นั่ง : " . $_GET["seat"] . " วันที่/เวลา : " . date("Y/m/d - H:i:s");

?>