<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<style type="text/css">
		body{font-size:0.8em; color:green;}
		.divc{border:2px dashed orange ; padding:15px; width:500px; margin:20px auto;}
		input,select,span{border:1px dotted green;}
		select,input{font-size:0.9em; color:green;}
		input.radioc{margin-left:10px;}
	</style>
</head>
<body>
<?php
//可以保持用户选择的单选按钮选择函数：
function create_leve_radio($value, $name="leve"){
	echo '<input class="radioc" type="radio" name="'. $name .'" value="'. $value .'"';
	if(isset($_POST[$name]) && $_POST[$name] == $value){
		echo ' checked="checked"';
	}
	echo '/>'. $value;
}

if(isset($_POST['submit'])){
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['selects']) && isset($_POST['leve']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['selects']) && !empty($_POST['leve'])){
		echo '<h1>POST表单提交的内容</h1>';
		echo '你选择了： '. $_POST['selects'] .'<br />';
		echo '输入的用户名： '.$_POST['username'] .'<br />';
		echo '输入的密码： '.$_POST['password'] .'<br />';
		echo '年龄： '.$_POST['leve'] .'<br />';
		echo '文凭： '.$_POST['eduleve'] .'<br />';

	}else{
		echo '<h1>错误信息</h1>';
		echo '<strong style="color:red">Error: 每一项都比如输入，不能为空。</strong>';
	}
}
?>
<div class="divc">
<form action="test.php" method="post" >
	<p><label for="">用户名： </label><input type="text" name="username" value="<?php if(isset($_POST['username']) && !empty($_POST['username'])){echo $_POST['username'];} ?>" /></p>
	<p><label for="">密码： </label><input type="password" name="password" /></p>
	<p><select name="selects" id="selects" >
			<option value="苹果" <?php if(isset($_POST['selects']) && $_POST['selects'] == '苹果'){echo 'selected="selected"';} ?>>苹果</option>
			<option value="香蕉" <?php if(isset($_POST['selects']) && $_POST['selects'] == '香蕉'){echo 'selected="selected"';} ?>>香蕉</option>
			<option value="橘子" <?php if(isset($_POST['selects']) && $_POST['selects'] == '橘子'){echo 'selected="selected"';} ?>>橘子</option>
		</select>
	</p>
	<p><label for="">年龄： </label><span>
	<!-- 
	<input type="radio" name="leve" value="18岁以下"<?php if(isset($_POST['leve']) && $_POST['leve'] == '18岁以下'){echo 'checked="checked"';} ?> />18岁以下<input type="radio" name="leve" value="30岁以下"<?php if(isset($_POST['leve']) && $_POST['leve'] == '30岁以下'){echo 'checked="checked"';} ?> />30岁以下
	<input type="radio" name="leve" value="50岁以下"<?php if(isset($_POST['leve']) && $_POST['leve'] == '50岁以下'){echo 'checked="checked"';} ?> />50岁以下<input type="radio" name="leve" value="65岁以下"<?php if(isset($_POST['leve']) && $_POST['leve'] == '65岁以下'){echo 'checked="checked"';} ?> />65岁以下
	-->
	<?php
	create_leve_radio('18岁以下');
	create_leve_radio('30岁以下');
	create_leve_radio('50岁以下');
	create_leve_radio('65岁以下');
	?>
	</span></p>
<p><label for="">文凭： </label><span>
	<?php
	$edu_leve = 'eduleve';
	$edu_leve_arr = array('初中文化','高中文化','大专文化','本科以上');
	foreach($edu_leve_arr as $value){
		create_leve_radio($value,$edu_leve);
	}
	?>
	</span></p>
	<p><input type="submit" name="submit" value="提交"></p>
</form>
</div>
</body>
</html>
