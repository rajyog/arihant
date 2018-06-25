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
            	<font style="color:#f60;font-weight:bold;font-size:20px;">Registration Here,</font>
            		<br><br>
                    <form action="registeration.php" method="post" name="register">
                    <table style="color:#f60;font-size:13px;">
	<tr>
    	<td colspan="2">
        	<br>
        	<img src="images/thum.png" align="center" width="20px">&nbsp;&nbsp;&nbsp;<font size=3>Personal Information :</font>
        	<br>
        </td>
    </tr>
	<tr>
    	<td>
        	NAME :	
        </td>
        <td>
        	<input type="text" name="name" placeholder="Enter Name">
        </td>
    </tr>
    <tr>
    	<td>
        	ADDRESS :	
        </td>
        <td>
        	<textarea placeholder="Enter Feedback" name="address">
            	
            </textarea>
        </td>
    </tr>
    <tr>
    	<td>
        	MOBILE :	
        </td>
        <td>
        	<input type="text" name="mobile" placeholder="Enter Mobile" maxlength="10">
        </td>
    </tr>
    <tr>
    	<td>
        	GENDER :
        </td>
        <td>
        	<select name="gender">
            	<option>--Select--</option>
                <option>Male</option>
                <option>Female</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>
        	EMAIL :	
        </td>
        <td>
        	<input type="email" name="email" placeholder="Enter Email">
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<br>
        	<img src="images/thum.png" align="center" width="20px">&nbsp;&nbsp;&nbsp;<font size=3>Login Information :</font>
        	<br>
        </td>
    </tr>
    <tr>
    	<td>
        	USERID :	
        </td>
        <td>
        	<input type="text" name="user" placeholder="Enter User">
        </td>
    </tr>
    <tr>
    	<td>
        	PASSWORD :	
        </td>
        <td>
        	<input type="password" name="password" placeholder="Enter Password">
        </td>
    </tr>
    <tr>
    	<td>
        	RE-TYPE :	
        </td>
        <td>
        	<input type="password" name="passwordd" placeholder="Enter Re-Type">
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        	<br>
        	<img src="images/thum.png" align="center" width="20px">&nbsp;&nbsp;&nbsp;<font size=3>Security Information :</font>
        	<br>
        </td>
    </tr>
    <tr>
    	<td>
        	SE-Q :
        </td>
        <td>
        	<select name="seq">
            	<option>--Select--</option>
                <option>Your Fevorite Car ?</option>
                <option>Your Fevorite Teacher ?</option>
                <option>Your Fevorite Food ?</option>
                <option>Your Fevorite School ?</option>
            </select>
        </td>
    </tr>
    <tr>
    	<td>
        	SE-A :	
        </td>
        <td>
        	<input type="text" name="sea" placeholder="Enter Answare">
        </td>
    </tr>
    <tr align="center">
    	<td colspan="2">
        	<button type="submit" name="Send">REGISTER</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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