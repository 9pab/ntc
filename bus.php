<?php
    date_default_timezone_set("Asia/Bangkok");
    echo "สายรถ : " . $_GET["route"] . " หมายเลขที่นั่ง : " . $_GET["seat"] . " วันที่/เวลา : " . date("Y/m/d - H:i:s");

?>