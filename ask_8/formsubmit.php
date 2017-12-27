<html>
<body>
	
<?php 

include '../db_connect.php';

$CheckTable = tep_db_query("SHOW TABLES LIKE 'Updatetable'");

if(tep_db_num_rows($CheckTable) > 0 ){

}else{

$query = "CREATE TABLE Updatetable (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Akeks VARCHAR(30) NOT NULL,
passed VARCHAR(30) ,
favor VARCHAR(50) ,
)";

$result = mysql_query($query)
}

?>
</body>
</html>