<?php
// MySQLi connection
$mysqli = new mysqli("localhost", "root", "", "good_db");
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}else{
    echo("Connected 123");
};
// SQL to create table
// $sql = "CREATE TABLE users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// Execute query
// if ($mysqli->query($sql) === TRUE) {
//     echo "Table 'users' created successfully";
// } else {
//     echo "Error creating table: " . $mysqli->error;
// }
// Close connection
$mysqli->close();
?>