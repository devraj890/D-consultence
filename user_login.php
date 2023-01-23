<?php
require "connection/connect.php";
error_reporting(E_ALL ^ E_NOTICE);

// session_start();

$login = false;
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from tb_user where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('location:' . $siteurl);
    } else {
        echo "<script> alert('Incorrect username and password'); </script> ";
    }
}
?>


<?php
include "Layouts/common_header.php";
?>

<section>
    <div class="container f-user">
        <div class="f-h-user text-center">
            <h1>Login Now</h1>
        </div>

        <div class="user-form">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="userlogin_form" onsubmit="return validateForm()" method="post">
                <div class="form-group" id="username">
                    <label class="control-label" for="username">Username :</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username">
                    <strong> <span class="formerror"> </span></strong>
                </div>
                <div class="form-group" id="password">
                    <label class="control-label" for="password">Password :</label>
                    <input type="password" class="form-control" placeholder="Enter password" name="password">
                    <strong> <span class="formerror"> </span></strong>
                </div>
                <div class="form-group mb-2 mt-2">
                    <button type="submit" class="btn btn-primary w-25" name="login">Login</button>
                </div>

                <div class="form-group">
                    <label>or</label> <br>
                    <label><a href="<?php $siteurl ?>user_signup.php">don't have an account? Signup.</a></label>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include "Layouts/footer.php";
?>

<script src="js/user_login.js"></script>