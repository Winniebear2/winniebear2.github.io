<?php
	//后台连接数据库
	$servername = "127.0.0.1:3306";//	数据库的端口
	$username = "root";
	$password = "123456";
	$dbname = "first"; 	//数据库名
	$conn = new mysqli($servername, $username, $password, $dbname);	
	mysqli_set_charset($conn, "utf8");
	// if ($conn->connect_error) {
	// 	die("Connection failed: " . $conn->connect_error);
	// }
	// else{
	// 	echo "Connected successfully";//便于测试，测试完注释掉，否则可能影响之后的运作
	// }
?>