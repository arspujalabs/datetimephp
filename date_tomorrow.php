<?php
// set current date (format YYYY/MM/DD)
$today = date("Y-m-d"); // or you can set as spesific date = 2022-02-10
// get yesterday
$tomorrow = date("Y-m-d", strtotime("+1 Days", strtotime($today)));
// print results
echo $tomorrow;
?>
