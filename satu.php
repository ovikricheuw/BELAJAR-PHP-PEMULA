<?php
  $host = 'localhost';
  $user = 'root';      
  $password = '';      
  $database = 'siswa_db';  
 
$konek_db = mysql_connect($host, $user, $password);

$find_db = mysql_select_db($database);

if ($find_db) {
	echo "database ada" ;
	
	mysql_close($konek_db);
	
}
else {
	
	echo "Database tidak ada";
	
	mysql_close($konek_db);
}

  
?>