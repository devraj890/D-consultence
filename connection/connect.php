<?php
session_start();

$siteurl = "http://localhost/D-consulting/";
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbconsulting";

//create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if(!$conn)
{
    die("Sorry We failed to Connect...".mysqli_connect_error());
}
// else
// {
//     echo "Connection successfully";
// }

?>