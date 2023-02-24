<?php include ('../config.php');
  if(isset($_POST['password_reset']))
  {
    $email=$_GET['email'];
    $npass=md5($_POST['new_password']);
    $cnewpass=md5($_POST['cnew_password']);
    $token=$_GET['token'];
    if(!empty($token))
    {
        if(!empty($token) && !empty($npass) && !empty($cnewpass))
        {
            $check_token="SELECT verify_token from tbl_login where verify_token='$token'";
            $check_token_run=mysqli_query($con, $check_token);
            if(mysqli_num_rows($check_token_run)>0)
            {
                if($npass=$cnewpass)
                {
                    $updatepassword="UPDATE tbl_login SET password='$npass' where verify_token='$token'";
                    $updatepassword_run=mysqli_query($con, $updatepassword);
                    if($updatepassword_run)
                    {
                        echo "<script> alert('Password Updated'); </script>";
                        //header('location:login.php');
                    }
                }
                else{
                    echo "<script> alert('Password not match'); </script>";
                    //header('location:change_password.php');
                }
            }
        }
        else
        {
            echo "<script> alert('invalid'); </script>";
            //header('location:change_password.php');
        }
    }
    else
    {
        echo "<script> alert('No token'); </script>";
        //header('location:change_password.php');
    }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link rel="shortcut icon" href="assets/images/logo1.png" />
    <link rel="stylesheet" href="assets/css/css1/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/css1/fontawsom-all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/signup.css" />
    <script src="assets/js/validate.js"></script>
    <style>
      .error-message
      {
        color:red;
        font-size:15px;

      }
    </style>
</head>

<body class="h-100">
  <!-- ################# Header Starts Here#######################--->
  <header id="menu-jk">
    <div id="nav-head" class="header-nav">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
            <img src="assets/images/logo.jpg" alt="">
            <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
          </div>
          <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="index.php#services">Services</a></li>
              <li><a href="index.php#about_us">About Us</a></li>
              <li><a href="index.php#gallery">Our Team</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
<!--##################### Header Ends Here #####################-->
<div class="login">
    <div class="login-box">
        <h2>Change Password</h2>
        <form action="" method="POST">
            <div class="user-box">
                <input type="password" name="new_password" id="password" onkeyup="validatePassword()" required="">
                <label>New Password</label>
            </div>
            <div class="user-box">
                <input type="password" name="cnew_password" id="cpassword" onkeyup="validateForm()" required="">
                <label>Confirm New Password</label>
            </div>
          
            <button type=submit name="password_reset" id="signup_btn">Update Paasword</button>
        </form>
        <p class="no-c">Already have an Account? <a href="login.php" style="color:#2030F4;font-weight:bold;">Login</a></p>
      </div>
</div>
        
        

<!-- ################# Footer Starts Here#######################--->
        <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        MedSphere is a leading provider of health care, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div>

                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        MedSphere <br>
                        Kochi (K.K District) <br>
                        Kerala, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:info@medsphere.com" class="">info@bluedart.in</a><br>
                        Web: <a href="www.medsphere.com" class="">www.bluedart.in</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a>2022 &copy; All Rights Reserved | Designed and Developed by MedSphere</a>
            </div>

        </div>
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>        
<script src="assets/js/script.js"></script>
<script src="assets/js/validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>