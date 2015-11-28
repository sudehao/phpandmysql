<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Form Feedback</title>
	<style>
		p{
			background:#f0e68c;
			border:1px solid #daa520;
		}
		tt{
			background:#add8e6;
			padding:0 3px;
			border:1px solid #00bfff;
		}
		i{
			color:#5f9ea0;
		}
	</style>
</head>
<body>
<?php
//Create a shorthand for the form data:
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$comment = $_REQUEST['comment'];

//Create the $gender varible:
if(isset($_REQUEST['gender'])){
	$gender = $_REQUEST['gender'];
}else{
	$gender = NULL;
}

//Print the submitted information:
echo '<p>Thank you, <b>'.$name.'</b>, '.
	 'for the following comment: <br /><tt>'.$comment.'</tt></p>'.
	 '<p> We will reply to you at <i>'.$email.'</i>.</p>'."\n";

echo '<p>If elseif else:</p>';
//Print a message based upon the gender value by 'if elseif else':
if($gender == 'M'){
	echo '<p><b>Good day, Sir!</b></p>';
}elseif($gender == 'F'){
	echo '<p><b>Good day, Madam!</b></p>';
}else{
	echo '<p><b>You forget to enter your gender!</b></p>';
}

echo '<p>Switch:</p>';
//Print a message based upon the gender value by 'switch':
switch($gender){
	case 'M':
		echo '<p><b>Good day,Sir!!!</b></p>';
		break;
	case 'F':
		echo '<p><b>Good day, Madam!!!</b></p>';
		break;
	default:
		echo '<p><b>You forget to enter your gender!!!</b></p>';
}
?>
</body>
</html>