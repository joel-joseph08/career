<?php include ('../config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        /* Import Font Dancing Script */
@import url(https://fonts.googleapis.com/css?family=Dancing+Script);
* {
    box-sizing: border-box;
    }

    .row {
    margin-left:-5px;
    margin-right:-5px;
    }
    
    .column {
    float: left;
    width: 50%;
    padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
    content: "";
    clear: both;
    display: table;
    }

    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    }

    th, td {
    text-align: left;
    padding: 16px;
    }

    /* tr:nth-child(even) {
    background-color: #f2f2f2;
    } */

body {
    background-color: #e8f5ff;
    font-family: Arial;
    overflow: hidden;
}
img {
  border: 5px solid #555;
  border-radius: 50px 20px;
}

/* Main */
.main {
    margin-top: 2%;
    margin-left: 20%;
    margin-right:20%;
    font-size: 28px;
    padding: 0 10px;
    width: 58%;
}

.main h2 {
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
}

.main .card {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 1px 1px 8px 0 grey;
    height: auto;
    margin-bottom: 20px;
    padding: 20px 0 20px 50px;
}

.main .card table {
    border: none;
    font-size: 16px;
    height: 270px;
    width: 80%;
}

.edit {
    position: absolute;
    color: #e7e7e8;
    right: 14%;
}

.social-media {
    text-align: center;
    width: 90%;
}

.social-media span {
    margin: 0 10px;
}

.fa-facebook:hover {
    color: #4267b3 !important;
}

.fa-twitter:hover {
    color: #1da1f2 !important;
}

.fa-instagram:hover {
    color: #ce2b94 !important;
}

.fa-invision:hover {
    color: #f83263 !important;
}

.fa-github:hover {
    color: #161414 !important;
}

.fa-whatsapp:hover {
    color: #25d366 !important;
}

.fa-snapchat:hover {
    color: #fffb01 !important;
}
    </style>
</head>
<body>
    <!-- Navbar top -->
    

    <!-- Main -->
    <div class="main">
        <h2>IDENTITY</h2>
        <div class="card">
            <div class="card-body">
                <!-- <i class="fa fa-pen fa-xs edit"></i> -->
                <div class="row">
                    <div class="column">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>
                                    <?php                                               
                                                if(isset($_SESSION['username']))
                                                {
                                                    echo ($_SESSION['username']);                                                                                     
                                                }
                                            ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>admin@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <td>Admin</td>
                                </tr>
                                <tr>
                                    <td>Role</td>
                                    <td>:</td>
                                    <td>Owner</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="column">
                        <img src="images/icon/adminlogo.webp" height="300px" width="300px" alt="image">
                    </div>
                </div>
                
            </div>
        </div>

        <h2>SOCIAL MEDIA</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <div class="social-media">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-invision fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</body>
</html>