<?php
include '../dbconn.php';
 
    session_start();
    if(isset($_SESSION['islogged'])){
        $islogged=$_SESSION['islogged'];
    }
    else{
        $islogged=false;
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="sellerpagestyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Page</title>
    <style>

    </style>
</head>

<body>

    <div class="wrapper">
        <!-- <div class="section"></div> -->
        <!--Top menu -->
        <!-- <div class="right_bar">
            <div class="sponsor_button"><img src="images/nav_images/uconn-grant-logo.png" alt=" "></div>
            <div><img src="images/nav_images/usitt.png" alt="Sponsored in part by USITT"></div>
        </div>  -->

        <div id="main-div">
            <div class="sidebar" id="left-side">
                <!-- <img src="../mobiletemplate/images/admin-panel.png" alt="" class="centre" height=" 50px "> -->
                <h3>Seller</h3>
                <p></p>
                <ul>
                
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-desktop"></i></span>
                            <span class="item">My Dashboard</span>
                        </a>
                    </li>
                    
                
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                            <span class="item">Products</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-database"></i></span>
                            <span class="item">Development</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-chart-line"></i></span>
                            <span class="item">Reports</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-user-shield"></i></span>
                            <span class="item">Admin</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-cog"></i></span>
                            <span class="item">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="sellerindex.php">
                            <span class="icon"><i class="fa fa-keyboard me-2"></i></span>
                            <span class="item">forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <span class="item">My Account</span>
                        
                        </a>
                    </li>

                    <?php
                        if($islogged){
                            echo '
                                <li>
                                    <a href="../logout.php">
                                        <span class="icon"><i class="fa fa-sign-out-alt" aria-hidden="true">' . $_SESSION["login_user"] . '</i></span>
                                        <span class="item">Logout</span>
                                    </a>
                                </li>
                            ';
                        }
                    ?>
                                
                </ul>
            </div>

            <div id="right-side">
                he
            </div>
        </div>
        

   

                     </div>
        
   
    <!-- <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Messages</h4>
      </div>
    </div>
    </div> -->


    
</body>

</html>
