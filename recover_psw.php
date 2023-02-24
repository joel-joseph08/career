    <?php session_start() ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="assets/css/resertstyle.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   
    <title>Login Form</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">User Password Recover</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Password Recover</div>
                    <div class="card-body">
                        <form action="#" method="POST" name="recover_psw">
                            <div class="form-group row">
                                <label for="email_address"  class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address"  onkeyup='emailValidation(this)' class="form-control" name="email" required autofocus>
                                    <span id="mail" class="new"  style="color:red;"></span> 
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Recover" name="recover">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>

<?php 
    if(isset($_POST["recover"])){
        include('dbconn.php');
        $email = $_POST["email"];

        $sql = mysqli_query($conn, "SELECT * FROM tbl_login WHERE u_Id='$email'");
        $query = mysqli_num_rows($sql);
  	    $fetch = mysqli_fetch_assoc($sql);

        if(mysqli_num_rows($sql) <= 0){
            ?>
            <script>
                alert("<?php  echo "Sorry, no emails exists "?>");
            </script>
            <?php
        }else if($fetch["status"] == 0){
            ?>
               <script>
                   alert("User does not exist now !");
                   window.location.replace("login.php");
               </script>
           <?php
        }else{
            // generate token by binaryhexa 
            $token = bin2hex(random_bytes(5));

            
            $token_sql= "UPDATE tbl_login SET reset_code='$token' WHERE u_Id='$email'";
            //session_start ();
            // $_SESSION['token'] = $token;
            // $_SESSION['user_email'] = $email;
            if(mysqli_query($conn, $token_sql)){
                require "Mail/phpmailer/PHPMailerAutoload.php";
                $mail = new PHPMailer;

                $mail->isSMTP();
                $mail->Host='smtp.gmail.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='tls';

                // h-hotel account
                $mail->Username='joeljohnjoseph2023b@mca.ajce.in';
                $mail->Password='Rmca2021#';

                // send by h-hotel email
                $mail->setFrom('joeljohnjoseph2023b@mca.ajce.in', 'Password Reset');
                // get email from input
                $mail->addAddress($_POST["email"]);
                //$mail->addReplyTo('lamkaizhe16@gmail.com');

                // HTML body
                $mail->isHTML(true);
                $mail->Subject="Recover your password";
                $mail->Body="<b>Dear User</b>
                <h3>We received a request to reset your password.</h3>
                <p>Kindly click the below link to reset your password</p>
                http://localhost/lumia/reset_psw.php?email=$email&token=$token
                <br><br>
                <p>With regrads,</p>
                <b>Career</b>";

                if(!$mail->send()){
                    ?>
                        <script>
                            alert("<?php echo " Email sending failed "?>");
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            window.alert("  Email send out !  Kindly check your email inbox.");
                            window.location.replace("index.html");
                        </script>
                    <?php
                }
            }
            else{
                echo "<script>alert('Unable to generate token !! Please try later.');</script>";
            }
        }
    }


?>
<script>
function emailValidation(inputTxt){
    // ^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$
    var regx = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
    var textField = document.getElementById("mail");
        
    if(inputTxt.value != '' ){
        if(inputTxt.value.match(regx)){
            textField.textContent = '';
            textField.style.color = "green";
        }else{
            textField.textContent = 'email id  is not valid!!! please insert a valid one';
            textField.style.color = "red";
        }  
    }else{
        textField.textContent = 'your are not allowed  to leave a field  empty';
        textField.style.color = "red";
    }
}
</script>