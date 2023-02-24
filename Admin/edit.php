<?php include ('../config.php');
if (isset($_GET['id'])) {
    $idd = $_GET['id']; 
    $sql = "SELECT * FROM tbl_products WHERE id='$idd'";
    $result = mysqli_query($conn, $sql);
}

if (isset($_POST['update'])) {
    // $id = $_POST['id'];
    $pname=$_POST['pname'];
    $pprice = $_POST['pprice'];
    $gst = $_POST['gst'];
    $weight = $_POST['weight'];
    $oname = $_POST['oname']; 
    $sql = "UPDATE tbl_products SET pname ='$pname',pprice='$pprice',gst='$gst',weight='$weight',oname='$oname' WHERE id='$idd'"; 
    $result = $conn->query($sql); 
    if ($result == TRUE) {
        header("Location:viewproduct.php");
        // echo "Record updated successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    <!-- Title Page-->
    <title>edit products</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style>
            #products {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            /* margin-left:20px; */
            /* margin-right:30px; */
            }
            table
            {
                            margin-right:30px;
            margin-left:20px;


            }

            #products td, #products th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            }

            #products tr
            {background-color: #fff;}

            #products tr:hover {background-color: #ddd;}

            #products th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
            }
    </style>

</head>
<body>
    
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/admin logo1.png" alt="admin"/>
                    <!-- <li class="logo">Admin</li> -->
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="#">View Coustemers</a>
                                </li>
                                <li>
                                    <a href="addproduct.php">Add Products</a>
                                </li>
                                <li>
                                    <a href="#">View Orders</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-container">            
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <?php
                                                
                                                if(isset($_SESSION['username']))
                                                {
                                                    echo '<h2 class="js-acc-btn"><b>'.$_SESSION['username'].'</b></h6>';
                                                    
                                                }
                                            ?>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">Admin@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../Logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header><br><br><br>
            <div class="section__content section__content--p30">
                    <div class="container">
                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                        <form method="post">
                            <table id="products">
                                <tr>
                                    <th>id</th>
                                    <th>image</th>
                                    <th>name<b style="color:red;">*</b></th>
                                    <th>price<b style="color:red;">*</b></th>
                                    <th>GST<b style="color:red;">*</b></th>
                                    <th>Total price<b style="color:red;">*</b></th>
                                    <th>Owner<b style="color:red;">*</b></th>
                                    <th>Action<b style="color:red;">*</b></th>
                                </tr>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td>
                                            <img src="<?php echo "upload_image/".$row['image']; ?>"  width="500" height="600" alt="image">
                                        </td>
                                        <td>
                                            <input type="text" name="pname" id="pname" placeholder="<?php echo $row['pname']; ?>">
                                        </td>
                                        <td>
                                        <input type="text" name="pprice" id="pprice" placeholder="<?php echo $row['pprice']; ?>">

                                        </td>
                                        <td>
                                        <input type="text" name="gst" id="gst" placeholder="<?php echo $row['gst']; ?>">
                                            
                                        </td>
                                        <td>
                                        <input type="text" name="weight" id="weight" placeholder="<?php echo $row['weight']; ?>">
                                            
                                        </td>
                                        <td>
                                        <input type="oname" name="oname" id="oname" placeholder="<?php echo $row['oname']; ?>">
                                            
                                        </td>
                                        <td> <button class="btn btn-info" name="update">update</button></td>                                    
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </table>
                        </form >
                    </div>         
            </div>
        </div>




        <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>

</html>
