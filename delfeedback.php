<?php
		require_once 'conn.php';
		
		$del=mysql_query("delete from feedback where id='$_REQUEST[id]'");
		
		header('location:managefeedback.php');
?>