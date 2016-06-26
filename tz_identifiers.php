<?php
//Returns same timezones list as 

$tz_indents = timezone_identifiers_list(); //calling procedural version
// $tz_indents = DateTimeZone::ListIdentifiers();

foreach($tz_idents as &$zone) {
    echo $zone . "<br>";
    
}
?>


<hr>


<?php
$tz_abbr = 'EST';
$tz_name = timezone_name_from_abbr($tz_abbr);
echo $tz_name;
?>