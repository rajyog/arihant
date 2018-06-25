<?php
		require_once 'conn.php';
		
		$data=mysql_query("select * from category");
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
            	<font style="color:#f60;font-weight:bold;font-size:20px;">Manage Category</font>
            	<br><br><br>
                <table class="dis">
                	<th>CATEGORY</th>
                    <th>INSERT</th>
                    <th>DELETE</th>
                    <th>UPDATE</th>
                    <?php
						while($row=mysql_fetch_array($data))
						{
					?>
                	<tr align="center">
                    	<td>
                        	<?php
								echo $row[1];
							?>
                        </td>
                        <td>
                        	<?php
								echo "<a href=addcategory.php><img src=images/add.png width=25 align=center></a>";
							?>
                        </td>
                        <td>
                        	<?php
								echo "<a href=delcategory.php?id=$row[0]><img src=images/error.png width=25 align=center></a>";
							?>
                        </td>
                        <td>
                        	<?php
								echo "<a href=upcategory.php?id=$row[0]><img src=images/up.png width=25 align=center></a>";
							?>
                        </td>
                    </tr>
                    <?php
						}
						?>
                </table>	
            </div>
        </td>
    </tr>
    <?php
			require_once 'footer.php';
	?>
</table>
</body>
</html>