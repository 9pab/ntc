<?php
$cookie_name = "empid";
if(!isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_POST["e"];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    if(!is_null($_POST["e"])) {
      header("Refresh:0");
    }
}

//test 

$empid = $_COOKIE[$cookie_name];
$route = $_GET["r"];
$seat = $_GET["s"];
date_default_timezone_set("Asia/Bangkok");
$date = date("Y/m/d - H:i:s");

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!<br>";
    echo "<form action='bus.php?r=C11&s=45' method='post'> รหัสพนักงาน : <input type='number' name='e'> <input type='submit'><br>";

  } else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
    echo "รหัสพนักงาน : " . $empid . " สายรถ : " . $route . " หมายเลขที่นั่ง : " . $seat . " วันที่/เวลา : " . $date;
  }   

?>