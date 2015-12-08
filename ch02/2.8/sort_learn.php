<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>数组排序函数的练习</title>
</head>
<body>
	<table border="0" cellspacing="3" cellpadding="3" align="center">
		<tr>
			<td><h2>Prices</h2></td>
			<td><h2>Fruits</h2></td>
		</tr>
<?php
//创建一个水果价格的数组：
$fruit = array(
	'Apple' => 5,
	'Banana' => 3,
	'Pear' => 1,
	'Orange' => 10,
	'Lemon' => 6,
	);

//用foreach循环出这个列表的键和值：
echo '<tr><td colspan="2"><strong>按数组自身排序</strong></td></tr>'."\n";
foreach($fruit as $fruits => $prices){
	echo '<tr><td>'. $prices .'</td><td>'
		 . $fruits .'</td></tr>'."\n";
}

//按键的升序排列 ksort():
echo '<tr><td colspan="2"><strong>ksort()函数键的升序排序</strong></td></tr>'."\n";
ksort($fruit);
foreach($fruit as $fruits => $prices){
	echo '<tr><td>'. $prices .'</td><td>'
		 . $fruits .'</td></tr>'."\n";
}

//按键的降序排列 krsort():
echo '<tr><td colspan="2"><strong>krsort()函数键的降序排序</strong></td></tr>'."\n";
krsort($fruit);
foreach($fruit as $fruits => $prices){
	echo '<tr><td>'. $prices .'</td><td>'
		 . $fruits .'</td></tr>'."\n";
}

//按值的升序排列 asort():
echo '<tr><td colspan="2"><strong>asort()函数值的升序排序</strong></td></tr>'."\n";
asort($fruit);
foreach($fruit as $fruits => $prices){
	echo '<tr><td>'. $prices .'</td><td>'
		 . $fruits .'</td></tr>'."\n";
}

//按值的降序排列 arsort():
echo '<tr><td colspan="2"><strong>asort()函数值的降序排序</strong></td></tr>'."\n";
arsort($fruit);
foreach($fruit as $fruits => $prices){
	echo '<tr><td>'. $prices .'</td><td>'
		 . $fruits .'</td></tr>'."\n";
}

//随机函数排列：
echo '<tr><td colspan="2"><strong>natsort()随机排序</strong></td></tr>'."\n";
natsort($fruit);
foreach($fruit as $fruits => $prices){
	echo '<tr><td>'. $prices .'</td><td>'
		 . $fruits .'</td></tr>'."\n";
}
?>
	</table>
</body>
</html>