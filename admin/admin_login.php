<?php

include "../connection/connect.php";

// session_start();
if (!isset($_SESSION)) {
    session_start();
} 

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link rel="stylesheet" href="../css/all.min.css">
    <!--link for font awesome 6.1..-->
    <!--link for bootstrap 4..-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/login.css">

    <style>
        .formerror 
        {
            color: red;
            font-size: 14px;
        }
    </style>

    <!--all bs Scripts-->
    <script src="../js/jquery.min.js"></script>
    <!--link for jquery..-->
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!--link for bootstrap 4 js..-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/popper-utils.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
    <!--link for font awesome 6.1..-->
    <script src="../js/login.js"></script>

</head>

<body>

    <div class="container ad-title">
        <h1>Admin Login</h1>
    </div>

    <div class="container log">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="login_form" onsubmit="return validateForm()" method="post">

            <div class="row mb-3 mt-3">
                <div class="col-md-12 col-lg-12 col-sm-12" id="uname">
                    <label class="control-label" for="uname">Username</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="uname">
                    <strong> <span class="formerror"> </span></strong>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-12 col-lg-12 col-sm-12" id="psw">
                    <label class="control-label" for="psw">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="psw">
                    <strong> <span class="formerror"> </span></strong>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-12 col-lg-12 col-sm-12" id="remember">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label> <br>
                    <strong> <span class="formerror"> </span></strong>
                </div>
            </div>

            <div class="row mb-1 mt-3">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                    <!-- <input type="submit" class="btn btn-primary" name="login" value="Login"> -->
                </div>
            </div>
        </form>

        <div class="row ml-4">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="a-link">
                    <a href="../index.php">Go To Website</a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<?php

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $query = "select * from tb_admin where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $_SESSION['username'] = $username;
        header('location:'.$siteurl.'admin/');
    } else {
        echo "<script> alert('Incorrect username and password'); </script> ";
    }
}
?>