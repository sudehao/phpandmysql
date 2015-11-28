<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Calendar</title>
</head>
<body>
<form action="" method="post">
<?php
//This script makes three pull-down menus for an HTML form:months, days, years.

//Make the months array:
$months = array(1=>'January', 'February', 'March', 'Aprill', 'May', 'june',
				'August', 'September', 'October', 'November', 'December');

//Make the days and years arrays:
$days = range(1,31);
$years = range(2011,2021);

//Make the months pull-down menu:
echo '<select name="month">'."\n";
foreach($months as $key => $value){
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>'."\n";

//Make the days pull-down menu:
echo '<select name="days">'."\n";
foreach($days as $key => $value){
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>'."\n";

//Make the years pull-down menu:
echo '<select name="years">'."\n";
foreach($years as $key => $value){
	echo "<option value=\"$key\">$value</option>\n";
}
echo '</select>'."\n";
?>
</form>
</body>
</html>