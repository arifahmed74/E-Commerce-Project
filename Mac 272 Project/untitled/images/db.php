











<?php
$con = mysqli_connect('localhost', 'newuser', 'password', 'newtest');
$sql = "INSERT into dbtable (name) values(?)";
$stmt = mysqli_prepare($con, $sql);
function mysql_stmt_bind_param(mysqli_stmt $stmt, $string, $name)
{

}

mysql_stmt_bind_param($stmt, 's', $name);
mysql_stmt_execute($stmt);
mysqli_close($con);
