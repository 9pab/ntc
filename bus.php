<?php
$cookie_name = "empid";
//$cookie_value = $_POST["e"];

$empid = $_POST["e"];
$route = $_GET["r"];
$seat = $_GET["s"];
date_default_timezone_set("Asia/Bangkok");
$date = date("Y/m/d - H:i:s");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!<br>";
    echo "<form action='bus.php?r=C11&s=45' method='post'> รหัสพนักงาน : <input type='number' name='e'><input type='submit'>";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
  }
  
    echo "รหัสพนักงาน : " . $empid . "สายรถ : " . $route . " หมายเลขที่นั่ง : " . $seat . " วันที่/เวลา : " . $date;

?>