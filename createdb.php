<?php
 $host = "dleskovic2-server.mysql.database.azure.com";
 $user = "ozlefgtzng";
 $pwd = "vxiS9raz$$L8aVpb";
 $db = "dleskovic2-database";
 $conn = mysqli_connect($host,$user,$pwd);
 // Check connection
 if (mysqli_connect_errno())
 {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 else {
    echo 'Connected successfully';
 }
 $sql = 'CREATE Database dleskovic2-database';
 if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
 } else {
    echo "Error creating database: " . $conn->error;
 }
 mysqli_select_db($conn,$db);
 $sql_create = "CREATE TABLE registration_tbl(id INT NOT NULL
 AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(30), email
 VARCHAR(30), date DATE);";
 if ($conn->query($sql_create) === TRUE) {
    echo "Table registration_tbl created successfully";
 } else {
    echo "Error creating table: " . $conn->error;
 }
 $conn->close();
?>