<?php
		$con=mysql_connect("localhost","root","openpc");
		
		if(!$con)
		{
			die("Not Connect...!");
		}
		
		mysql_select_db("arihant",$con);
?>