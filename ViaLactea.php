<?php  
	$hostname='sql10.freemysqlhosting.net';	//Nome do Servidor
	$username='sql10450701';		//Nome do Usuario do servidor
	$pass='7hc9sSem9m';				//Senha do servidor
	$bd='sql10450701';		//Nome do banco de dados
	
	//Conecta ao banco de dados
	$db=Mysqli_Connect($hostname, $username, $pass);	 
	Mysqli_Select_db($db, $bd);
	
	$ip_address = gethostbyname("www.google.com");  
	echo "your ip address is - ".$ip_address;  
	
	$sqlinsert ="insert into info values ('','$ip_address')";
	mysqli_query($db, $sqlinsert) or die ('ERRO!');
?>  
