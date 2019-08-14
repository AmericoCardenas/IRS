<?php

$host = 'irscloud-mysqldbserver.mysql.database.azure.com';
$username = 'USFLCAR@irscloud-mysqldbserver';
$password = 'Admin125';
$db_name = 'irsdb2019';

$con = mysqli_connect($host, $username, $password, $db_name, 3306);


if (!$con) {
die('Connection Failed '.mysqli_connect_error());
}
else{
    echo "Connected successfully";
    }
?>