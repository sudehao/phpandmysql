<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Multidimensional Arrays</title>
	<style>
	h2{
		font-size:18px;
		color:orange;
	}
	ul{
		list-style-type:none;
	}
	p{
		background:#f0e68c;
		border:1px solid #daa520;
	}
	</style>
</head>
<body>
	<p>Some North American States, Provinces, and Territories:</p>

<?php
//Create on array:
$mexico =array(
	'YU' => 'Yucatan',
	'BC' => 'Baja California',
	'OA' => 'Oaxaca');

//Create another array:
$us = array(
	'MD' => 'Maryland',
	'IL' => 'Illinois',
	'PA' => 'Pennsylvania',
	'LA' => 'Lowa');

//Create a third array:
$canada = array(
	'QC' => 'Quebec',
	'AB' => 'Alberta',
	'NT' => 'Northwest Territories',
	'YT' => 'Yukon',
	'PE' => 'Prince Edward Island');

//Combine the arrays:
$n_america = array(
	'Mexico' => $mexico,
	'United States' => $us,
	'Canada' => $canada);

//Loop through the countries:
foreach($n_america as $country => $list){

	//Print a heading:
	echo "<h2>$country</h2>\n<ul>\n";

	//Print each state, province, or territory:
	foreach($list as $key => $value){
		echo "<li>$key - $value</li>\n";
	}

	//Close the list:
	echo '</ul>'."\n";
}  //End of main FOREACH.
?>

<?php  //数组和字符串的相互转化：
$s1 = 'Mon-Tue-Web-Thu-Fri';
$days_array = explode('-',$s1);

//用print_r打印数组的键值对：
echo '<p>';
print_r($days_array);
echo '</p>';

foreach($days_array as $key => $value){
	echo "<i>$key => $value </i><br />";
}
$s2 = implode('>', $days_array);
echo "<p>$s2</p>";

?>
</body>
</html>