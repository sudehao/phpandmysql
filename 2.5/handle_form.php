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
//Print the submitted information:
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])){
	echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments:<br />
	<tt>{$_POST['comment']}</tt></p>
	<p>We will reply to you at <i>{$_POST['email']}</i></p>\n";
}else{
	echo '<p>Please go back and fill out the form again.</p>';
}
?>
</body>
</html>