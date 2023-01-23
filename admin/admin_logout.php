<?php
include "../connection/connect.php";

// session_start();
if (!isset($_SESSION)) {
    session_start();
} 

if(session_destroy())
{
    header('location:'.$siteurl);
}
