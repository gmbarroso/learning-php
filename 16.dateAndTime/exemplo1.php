<?php
echo date("d/m/Y H:i:s");
echo "<br>";
echo date("Y/m/d H:i:s");
echo "<br>";
echo time(); // timestamp. sistema Unix que começou em 1/1/1970
echo "<br>";
strtotime('now');
echo "<br>";
$ts = strtotime("2019-11-28");
echo date('1, d/m/Y', $ts);
// echo "<br>";
// echo strtotime('+1 week');
?>