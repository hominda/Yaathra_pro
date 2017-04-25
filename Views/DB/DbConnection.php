<?php 
// establishing the MySQLi connection
$con = mysqli_connect("localhost","root","","mytest");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}
?>