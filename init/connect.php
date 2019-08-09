<?php
	$host = 'localhost';
	$user = 'php_businessdb';
	$pwd = 'yourpassword';
	$dbname = 'admission inquiry';
	$db = new mysqli($host,$user,$pwd,$dbname);
	$link = mysqli_connect($host,$user,$pwd,$dbname);
	mysqli_set_charset($link,'utf8');
	if($link){
		// echo '连接成功！';
	}else{
		echo '失败：'.mysqli_connect_error();
	}
	$db->query("SET NAMES UTF8");
	?>