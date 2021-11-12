<html>
</body>
<table>
	<tr>
		<td width="30px">ID      </td>
		<td width="100px">IP</td>
	<tr>
</table>
<hr>
</body>
</html>
<?php  
	Require ('Connection.php');
	
	$result = mysqli_query($db, "SELECT * FROM info");
	
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr>
				<td>" .$row['id'] ."   -   </td>
				<td>" .$row['ip_address'] ."</td>
			</tr>";
		?><br><?php
	}
?>  