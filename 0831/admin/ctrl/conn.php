<?php
$s="127.0.0.1";
			$uname="root";
			$upwd="root";
			$db="ebuy";
			$conn=new mysqli($s,$uname,$upwd,$db);
			if($conn->connect_error){
				die("连接失败：".$conn->connect_error);
			}
?>