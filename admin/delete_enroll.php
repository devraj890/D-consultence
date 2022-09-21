<?php
include "../connection/connect.php";

session_start();

$user = $_SESSION['username'];

if($user == true)
{
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $query = "delete from tb_enroll where Enroll_id = '$id' ";
        $result = mysqli_query($conn, $query);

        $_SESSION['status'] = "Data Deleted ";
        header('location:view_enroll.php');
    }
    else
    {
        $_SESSION['status'] = "Data Not Found ";
        header('location:view_enroll.php');
    }
}
else
{
    header('location:admin_login.php');
}
?>