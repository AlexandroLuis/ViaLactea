<html>
</body>
<table>
	<tr>
		<td width="30px">ID      </td>
		<td width="100px">IP</td>
	<tr>
</table>
<hr>
</body>
</html>
<?php  
	$hostname='sql10.freemysqlhosting.net';	//Nome do Servidor
	$username='sql10450701';		//Nome do Usuario do servidor
	$pass='7hc9sSem9m';				//Senha do servidor
	$bd='sql10450701';		//Nome do banco de dados
	
	//Conecta ao banco de dados
	$db=Mysqli_Connect($hostname, $username, $pass);	 
	Mysqli_Select_db($db, $bd);
	
	$result = mysqli_query($db, "SELECT * FROM info");
	
	while($row = mysqli_fetch_assoc($result)){
		echo"<tr>
				<td>" .$row['id'] ."   -   </td>
				<td>" ."<a href=https://whatismyipaddress.com/ip/".$row['ip_address'] .">".$row['ip_address'] ."</a></td>
			</tr>";
		?><br><?php
	}
?> 
