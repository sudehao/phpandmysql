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
		.error{
			font-weight:bold;
			color:#c00;
		}
	</style>
</head>
<body>
<?php
//Validate the name:
if(!empty($_REQUEST['name'])){
	$name = $_REQUEST['name'];
}else{
	$name = NULL;
	echo '<p class="error">You forget to enter your name!</p>';
}

//Validate the email:
if(!empty($_REQUEST['email'])){
	$email = $_REQUEST['email'];
}else{
	$email = NULL;
	echo '<p class="error">You forget to enter your email!</p>';
}

//Validate the comment:
if(!empty($_REQUEST['comment'])){
	$comment = $_REQUEST['comment'];
}else{
	$comment = Null;
	echo '<p class="error">You forget to enter the comment!</p>';
}

//Validate the gender:
if(isset($_REQUEST['gender'])){
	$gender = $_REQUEST['gender'];
	switch($gender){
		case 'M':
			echo '<p><b>Good day, Sir!</b></p>';
			break;
		case 'F':
			echo '<p><b>Good day, Madam!</b></p>';
			break;
		default:
			$gender = NULL;
			echo '<p calss="error">Gender should be either "M" or "F"!</p>';
	}
}else{
	$gender = NULL;
	echo '<p class="error">You forget to select your gender!</p>';
}

//If everything is OK, print the message:
if($name && $email && $comment && $gender){
	echo "<p>Thank you, <b>$name</b>, for the following comments:<br />
	<tt>$comment</tt></p>
	<p>We will reply to you at <i>$email</i>.</p>\n";
}else {
	echo '<p class="error">Please go back and fill out the form again.</p>';
}
?>
</body>
</html>