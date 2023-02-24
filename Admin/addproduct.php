<?php include ('../dbconn.php');
session_start();
if(isset($_POST['submit']))
{
    $pname=$_POST['cname'];
    // $image=$_POST['imagefile'];
    $pprice=$_POST['cprice'];
    // $gst=$_POST['gst'];
    // $weight=$_POST['weight'];
    // $tweight=$_POST['tweight'];
    $description=$_POST['description'];
    // $oname=$_POST['oname'];
    $img_name=$_FILES['imagefile']['name'];
    $tmp_img_name = $_FILES['imagefile']['tmp_name'];
    $folder='upload_image/';
    move_uploaded_file($tmp_img_name,$folder.$img_name);
    // $total= (($pprice*$gst)/100)+$pprice;
    // echo $folder.$img_name;
    // $select="SELECT * from tbl_products WHERE pname='$pname' && oname='$oname'";
    // $result= mysqli_query($conn,$select);
	// if(mysqli_num_rows($result)> 0 )
	// {
	// 	echo '<script type="text/javascript"> alert("exists")</script>';
		
	// }
    // else
    // {
        // print_r($_FILES['imagefile']);
        $sql="INSERT INTO tbl_course(cname,image,cprice,description,oname)VALUES('$cname','$img_name','$cprice','$description','$oname')";
        $result1=mysqli_query($conn,$sql);
        // echo '<script type="text/javascript"> alert("outside")</script>';
        if($result1)
        {
            // echo '<script type="text/javascript"> alert("inside")</script>';
            // print_r($img_name);
            echo '<script type="text/javascript"> alert("INSERTED")</script>';
            // header("Location:addcourse.php");
        }
        else
        {
           echo '<script>alert("failed")</script>';
        }

    }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    <!-- Title Page-->
    <title>Add products</title>

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
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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
                                    <a href="viewproduct.php">View Products</a>
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
                        <form method="POST" enctype="multipart/form-data" onsubmit="return productvalidate()">
                            <div class="row">
                                <div class="col-25">
                                    <h1 style="text-align:center;width: 1150px;">   COURSE DETAILS</h1>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Name of the Course<b style="color:red;">*</b></label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="pname" name="pname" placeholder="course name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="image">Image<b style="color:red;">*</b></label>
                                </div>
                                <div class="col-75">
                                    <input type="file" name="imagefile" id="imagefile" accept="image/*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="pprice">Course price<b style="color:red;">*</b></label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="pprice" name="pprice" placeholder="Course price">
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-25">
                                    <label for="gst">GST<b style="color:red;">*</b></label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="gst" name="gst" placeholder="GST">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="weight">Weight<b style="color:red;">*</b></label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="weight" name="weight" placeholder="weight of the product">
                                </div>
                            </div> -->
                            <!-- <div class="row">
                                <div class="col-25">
                                    <label for="tweight">Type of Weight<b style="color:red;">*</b></label>
                                </div>
                                <div class="col-75">
                                    <select id="tweight" name="tweight">
                                        
                                    </select>                                  
                                </div>
                            </div> -->
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="Description">Description</label>
                                </div>
                                <div class="col-75">
                                    <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-25">
                                    <label for="oname">Owner's Name<b style="color:red;">*</b></label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="oname" name="oname" placeholder="Name of the owner">
                                </div>
                            </div> -->
                            <div class="row">
                            <input type="submit" value="Submit" name="submit" id="submit" >
                            </div>
                        </form>
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
    <script type="text/javascript">
        function productvalidate()
        {
            // alert("hi");
            var pname= document.getElementById('pname').value;
            var imagefile = document.getElementById('imagefile').value;
            var pprice = document.getElementById('pprice').value;
            var gst = document.getElementById('gst').value;
            var weight = document.getElementById('weight').value;
            var tweight = document.getElementById('tweight').value;
            var description = document.getElementById('description').value;
            var oname = document.getElementById('oname').value;

            if(pname == "")
                    {
                        document.getElementById('pname').placeholder="** please fill the field";
                        document.getElementById('pname').style.border="1px solid red";
                        document.getElementById('pname').focus();
                        return false;
                    }
                    if(imagefile == "")
                    {
                        // document.getElementById('imagefile').placeholder="** please fill the field";
                        document.getElementById('imagefile').style.border="1px solid red";
                        document.getElementById('imagefile').focus();
                        return false;
                    }
                    if(pprice == "")
                    {
                        document.getElementById('pprice').placeholder="** please fill the field";
                        document.getElementById('pprice').style.border="1px solid red";
                        document.getElementById('pprice').focus();
                        return false;
                    }
                    else if(isNaN(pprice))
                    {
                      alert('please enter a numeric value');
                      document.getElementById('pprice').style.border="1px solid red";
                      document.getElementById('pprice').focus();
                      return false;

                    }
                    if(gst == "")
                    {
                        document.getElementById('gst').placeholder="** please fill the field";
                        document.getElementById('gst').style.border="1px solid red";
                        document.getElementById('gst').focus();
                        return false;
                    }
                    else if(isNaN(gst))
                    {
                      alert('please enter a numeric value');
                      document.getElementById('gst').style.border="1px solid red";
                      document.getElementById('gst').focus();
                      return false;

                    }
                    if(weight == "")
                    {
                        document.getElementById('weight').placeholder="** please fill the field";
                        document.getElementById('weight').style.border="1px solid red";
                        document.getElementById('weight').focus();
                        return false;
                    }
                    if(isNaN(weight))
                    {
                      alert('please enter a numeric value');
                      document.getElementById('weight').style.border="1px solid red";
                      document.getElementById('weight').focus();
                      return false;

                    }
                    // if(tweight == "")
                    // {
                    //     document.getElementById('tweight').placeholder="** please fill the field";
                    //     document.getElementById('tweight').style.border="1px solid red";
                    //     document.getElementById('tweight').focus();
                    //     return false;
                    // }
                    if(tweight == "<--- select --->")
                    {
                        document.getElementById('tweight').style.border="1px solid red";
                        alert('Please select an item');
                        document.getElementById('tweight').focus();
                        return false;
                    }
                    if(description == "")
                    {
                        document.getElementById('description').placeholder="** please fill the field";
                        document.getElementById('description').style.border="1px solid red";
                        document.getElementById('description').focus();
                        return false;
                    }
                    if(oname == "")
                    {
                        document.getElementById('oname').placeholder="** please fill the field";
                        document.getElementById('oname').style.border="1px solid red";
                        document.getElementById('oname').focus();
                        return false;
                    }
        }
    </script>
</body>

</html>
