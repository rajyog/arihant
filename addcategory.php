<?php
require_once 'conn.php';
$name=0;
$send=0;
if(isset($_REQUEST['send']))
{
	if($_REQUEST['name']=="")
	{
		$name=1;
	}
	
	if($name!=1)
	{
		
			$in=mysql_query("insert into category values(0,'$_REQUEST[name]')");
			$send=1;
	}
	
}
?>
<!doctype html>
<html>
<?php
	require_once 'head.php';
?>
	
<body>
<table class="maintab">
	<?php
			require_once 'header.php';
	?>
    <?php
			require_once 'menu.php';
	?>
    <tr>
    	<td width="26%" valign="top">
        	<?php
					require_once 'adminside.php';
			?>
        </td>
        <td width="74%" valign="top">
        	<div style="padding:20px;">
            	<font style="color:#f60;font-weight:bold;font-size:20px;">Add Category</font>
            		<br><br>
                    <form action="" name="category" method="post">
                    <table style="color:#f60;font-size:13px;">
	<tr>
    	<td colspan="3">
       		<?php
			if($send==1)
			{
					echo "Send Successed....!";
			}
			?> 	
        </td>
    </tr>
	<tr>
    	<td>
        	CATEGORY :	
        </td>
        <td>
        	<input type="text" name="name" placeholder="Enter Category">
        </td>
        <td>
        	<?php
				if($name==1)
				{
					echo "<img src=images/error.png width=25px></img>";
				}
			?>
        </td>
    </tr>
    
    <tr align="center">
    	<td colspan="3">
        	<button type="submit" name="send">SEND</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset">CLEAR</button>
        </td>
    </tr>
</table>
</form>
            </div>
        </td>
    </tr>
    <?php
			require_once 'footer.php';
	?>
</table>
</body>
</html>