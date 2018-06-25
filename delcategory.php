<?php
		require_once 'conn.php';
		
		$del=mysql_query("delete from category where id='$_REQUEST[id]'");
		
		header('location:managecategory.php');
?>