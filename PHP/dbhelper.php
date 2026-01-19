<?php 
$db_name = "newDb";
$db_server = "localhost";
$db_user = "root";
$db_pass = "";

// Connect to MySQL
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if($conn) {
    echo "Connection successful<br>";
} else {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to create table
$query = "CREATE TABLE person (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(256)
)";

// Execute query
if(mysqli_query($conn, $query)) {
    echo "Table 'person' created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
