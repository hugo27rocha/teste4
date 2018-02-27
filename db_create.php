<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:fcul.database.windows.net,1433; Database = app", "Elementos", "{Fcul2018!}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql1 = "CREATE TABLE admin_table (
  	admin_id int(5) NOT NULL,
  	username varchar(255) NOT NULL,
  	password varchar(255) NOT NULL,
  	email varchar(255) NOT NULL"
	);

   

  $conn->query($sql);

  

}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

echo "<h2>RIP ME- criou a tabela</h2>";
?>
