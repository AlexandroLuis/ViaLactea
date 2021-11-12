<?php  
	Require ('Connection.php');
	
	$ip_address = gethostbyname("www.google.com");  
	echo "your ip address is - ".$ip_address;  
	
	$sqlinsert ="insert into info values ('','$ip_address')";
	mysqli_query($db, $sqlinsert) or die ('ERRO!');
?>  