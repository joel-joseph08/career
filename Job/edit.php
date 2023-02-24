<?php
  include "../dbconn.php";
 
  $jid="";
  $jname="";
  $jcategory="";
  $jdescription="";
  $jqualification="";
  $pimg="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['jid'])){
      header("location:/E-LEARN/coursses/jobindex.php");
      exit;
    }
    $pid = $_GET['jid'];
    $sql = "select * from tbl_job where jid=$pid";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    while(!$row){
      header("location: /E-LEARN/coursses/jobindex.php");
      exit;
    }
    $jname=$row["jname"];
    $jcategory=$row["jcategory"];
    $jdescription=$row["jdescription"];
    $jqualification=$row["jqualification"];
    $img=$row["img"];
   


  }
  // $name = $_FILES['pimage']['name'];
  // $temp_name = $_FILES['pimage']['temp_name'];

  // if (isset($name)) {

  //     if (!empty($name)) {
  //         $location = '../seller/photos/';
  //     }

  //     if (move_uploaded_file($temp_name, $location.$name)) {
  //         echo 'uploaded';
  //     }

  // } else {
  //     echo 'please uploaded';
  // }
 $targetDir = "../imgselect/pics/";
 $finaltargetDir = "imgselect/pics/";
  if(isset($_POST['submit'])){
    $jid = $_POST["jid"];
    $jname=$_POST["jname"];
    $jcategory=$_POST["jcategory"];
    $jdescription=$_POST["jdescription"];
    $jqualification=$_POST["jqualification"];
    $img=$_FILES["img"]["name"];
    $targetFilePath = $targetDir . $img;
    $finaltargetFile = $finaltargetDir . $img;
    
    move_uploaded_file($_FILES["img"]["tmp_name"],$targetFilePath);
    $sql = "update tbl_job set jname='$jname', jcategory='$jcategory', jdescription='$jdescription', jqualification='$jqualification',img='$finaltargetFile' where jid='$jid'";
    //$result = $conn->query($sql);
    $result= mysqli_query($conn,$sql);
    if($result){
      echo "<script>alert('New JOB updated Successfully...');</script>";
      header('jobindex.php');
  }
  else{
    echo "<script>alert('Not updated !!');</script>";
  }
}
  ?>
    

<!DOCTYPE html>
<html>
<head>
 <title>Job</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold">
      <div class="container-fluid">
        <a class="navbar-brand" href="jobindex.php">Job form</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="sellerindex.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Add.php">Add New Job</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post" action="edit.php" enctype="multipart/form-data" name="editForm">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Job </h1>
 </div><br>

 <input type="hidden" id="jid" name="jid" value="<?php echo $jid; ?>" class="form-control" required> <br>

 <label>Job Name: </label>
 <input type="text" id="jname" name="jname" value="<?php echo $jname; ?>" class="form-control" required > <br>

 <label> Job Category: </label>
 <input type="text" id="jcategory" name="jcategory" value="<?php echo $jcategory; ?>" class="form-control" required> <br>

 <label> Job Description </label>
 <input type="text" id="jdescription" name="jdescription" value="<?php echo $jdescription; ?>" class="form-control" required> <br>

 <label> Job Qualification </label>
 <input type="text" id="jqualification" name="jqualification" value="<?php echo $jqualification; ?>" class="form-control" required> <br>

 <label> Upload Image: </label>
 <input type="file" id="img" name="img" class="form-control"> <br>

 <input type="submit" class="btn btn-success" value="edit" name="submit"><br>
 <a class="btn btn-info" type="submit" name="cancel" href="jobindex.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>