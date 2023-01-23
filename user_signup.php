<?php
require "connection/connect.php";
error_reporting(E_ALL ^ E_NOTICE);

$showalert = false;
$showerr = false;
if (isset($_POST['signup'])) {

  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  $existsql = "SELECT * FROM `tb_user` WHERE username = '$username'";
  $result = mysqli_query($conn, $existsql);

  $count = mysqli_num_rows($result);

  if ($count > 0) {
    $showerr = "Username Already Exists!";
  } else {
    if ($password == $cpassword) {
      $sql = "insert into tb_user (name,gender,phone,email,address,username,password) values ('$name', '$gender', '$phone', '$email', '$address', '$username', '$password')";
      $res = mysqli_query($conn, $sql);

      if ($res) {
        $showalert = true;
      }
    } else {
      $showerr = "Password do not match!";
    }
  }
}
?>

<?php
include "Layouts/common_header.php";
?>

<br>
<?php
if ($showalert) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Account has been created. you can <a href="<?php $siteurl ?>user_login.php"> login...</a> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  </div>';
}


if ($showerr) {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> ' . $showerr . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  </div>';
}
?>
<br>

<section>
  <div class="container f-user">
    <div class="f-h-user text-center">
      <h1>Sign-Up Now</h1>
    </div>

    <div class="user-form">
      <form action="" name="signup_form" onsubmit="return validateForm()" method="post">
        <div class="form-group" id="name">
          <label class="control-label" for="name">Name :</label>
          <input type="text" class="form-control" placeholder="Enter Name" name="name">
          <strong> <span class="formerror"> </span></strong>
        </div>

        <div class="form-group" id="gender">
          <label class="control-label" for="gender">Gender :</label> <br>
          <div class="form-check-inline">
            <label class="form-check-label ml-2">
              <input type="radio" class="form-check-input" name="gender" value="Male" /> Male
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label ml-2">
              <input type="radio" class="form-check-input" name="gender" value="Female" /> Female
            </label>
          </div> <br>
          <strong> <span class="formerror"> </span></strong>
        </div>
        <div class="form-group" id="phone">
          <label class="control-label" for="Phone">Phone :</label>
          <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone">
          <strong> <span class="formerror"> </span></strong>
        </div>
        <div class="form-group" id="email">
          <label class="control-label" for="email">Email :</label>
          <input type="email" class="form-control" placeholder="Enter email" name="email">
          <strong> <span class="formerror"> </span></strong>
        </div>
        <div class="form-group" id="address">
          <label class="control-label" for="address">Address :</label>
          <input type="text" class="form-control" placeholder="Enter Address" name="address">
          <strong> <span class="formerror"> </span></strong>
        </div>
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
        <div class="form-group" id="cpassword">
          <label class="control-label" for="cpassword">Confirm Password :</label>
          <input type="password" class="form-control" placeholder="Confirm password" name="cpassword">
          <strong> <span class="formerror"> </span></strong>
        </div>
        <div class="form-group mb-2 mt-2">
          <button type="submit" class="btn btn-primary w-25" name="signup">Signup</button>
        </div>

        <div class="form-group">
          <label>or</label> <br>
          <label><a href="<?php $siteurl ?>user_login.php">Have an account? Login.</a></label>
        </div>
      </form>
    </div>
  </div>
</section>
<?php
include "Layouts/footer.php";
?>
<script src="js/signup_validation.js"></script>