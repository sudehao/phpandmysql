<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Sorting Arrays</title>
	<style>
	</style>
</head>
<body>
<table border="0" cellspacing="3" cellpadding="3" align="center">
	<tr>
		<td><h2>Rating</h2></td>
		<td><h2>Title</h2></td>
	</tr>
<?php
//Create the array:
$movies = array(
	'Casablanca' => 10,
	'To Kill a Mockingbird' => 2,
	'The English Patient' => 2,
	'Stranger Than Fiction' => 9,
	'Story of the Weeping Camel' => 5,
	'Donnine Darko' => 7);

//Display the movies in their original order:
//按创建时的默认排序
echo '<tr><td colspan=\'2\'><b>In their original order:</b></td></tr>';
foreach($movies as $title => $rating){
	echo "<tr><td>$rating</td>
	<td>$title</td><tr>\n";
}

//Display the movies sorted by title:
ksort($movies); //按key排序
echo '<tr><td colspan="2"><b>Sorted by title:</b></td></tr>';
foreach($movies as $title => $rating){
	echo "<tr><td>$rating</td>
	<td>$title</td></tr>\n";
}

//Dispaly the movies sorted by rating:
asort($movies); //按value排序
echo "<tr><td colspan='2'><b>Sorted by rating:</b></td></tr>";
foreach($movies as $title => $rating){
	echo "<tr><td>$rating</td>
	<td>$title</td></tr>\n";
}

//Display the movies sorted by shuffle():
natsort($movies); //随机排序
echo "<tr><td colspan='2'><b>Sorted by shuffle:</b></td></tr>";
foreach($movies as $title => $rating){
	echo "<tr><td>$rating</td>
	<td>$title</td></tr>\n";
}
?>
</table>
</body>
</html>