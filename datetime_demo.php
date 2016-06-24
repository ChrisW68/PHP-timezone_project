<?php

$dt = new DateTime('July 23, 2016');

echo "Date: " . $dt->format('l, Fj, Y H:i:s') . "<br>";
echo "Timestamp: " . $dt->getTimestamp() . "<br>";
echo "<br>";

$timestamp = strtotime('June 23, 2016') + (60*60*8);  /*Will change time to June 23, 2016 at 8:00 a.m. (second * minutes * hours) */
$dt->setTimestamp( $timestamp );
echo "Date: " . $dt->format('l, F j, Y H:i:s') . "<br>";
echo"<br>";
    
$dt->modify('+1 year');
echo "Date: " . $dt->format('l, F j, Y H:i:s') . "<br>";

$tx = new DateTimeZone('America/New_York');

echo $tx->

?>