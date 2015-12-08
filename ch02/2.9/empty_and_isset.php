<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Empty Test</title>
	<style>
		span{
			display:inline-block;
			border:1px solid black;
		}
	</style>
</head>
<body>
<form action="empty_and_isset.php" method="post">
	<input type="text" name="username" />
	<input type="submit" value="Submit" />
</form>
<?php
$content = 0;

if (isset($content)){
	echo '赋值了！'."<span>$content</span>";
}else{
	echo '未赋值';
}

echo '<br />';

if (empty($content)){
	echo '空！';
}else{
	echo '非空'."<span>$content</span>";
}

/*
isset()：设置NULL时为假，在将变量赋值为 '' 零长度字符串（空字符串）、整数0、字符串'0'时，为真。
empty()：设置NULL时为假，在将变量赋值为 '' 零长度字符串（空字符串）、整数0、字符串'0'时，也为假。
empty()比isset()更严格。
*/
var_dump($content);
$a = NULL;
var_dump($a);
?>
</body>
</html>