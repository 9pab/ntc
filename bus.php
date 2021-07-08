<?php
$cookie_name = "empid";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

$empid = "empid";
$route = $_GET["r"];
$seat = $_GET["s"];
date_default_timezone_set("Asia/Bangkok");
$date = date("Y/m/d - H:i:s");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!<br>";
    echo "<form action='bus.php?r=C11&s=45' method='post'> Name: <input type='number' name='e'><br><input type='submit'>";

  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }
  
    echo "สายรถ : " . $route . " หมายเลขที่นั่ง : " . $seat . " วันที่/เวลา : " . $date;

?>