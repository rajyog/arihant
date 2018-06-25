<?php
require_once 'conn.php';
$name=0;
$feedback=0;
$send=0;
if(isset($_REQUEST['send']))
{
	if($_REQUEST['name']=="")
	{
		$name=1;
	}
	if($_REQUEST['feedback']=="")
	{
		$feedback=1;
	}
	if($name!=1 && $feedback!=1)
	{
		
			$in=mysql_query("insert into feedback values(0,'$_REQUEST[name]','$_REQUEST[feedback]')");
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
					require_once 'login.php';
			?>
        </td>
        <td width="74%" valign="top">
        	<div style="padding:20px;">
            	<font style="color:#f60;font-weight:bold;font-size:20px;">Feedback Us</font>
            		<br><br>
                    <form action="" name="feedback" method="post">
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
        	USERID :	
        </td>
        <td>
        	<input type="text" name="name" placeholder="Enter Name">
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
    <tr>
    	<td>
        	FEEDBACK :	
        </td>
        <td>
        	<textarea name="feedback">
            	
            </textarea>
        </td>
        <td>
        	<?php
				if($feedback==1)
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