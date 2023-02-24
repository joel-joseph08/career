<?php
    include "../dbconn.php";
    $targetDir = "../imgselect/pics/";
    $finalpath = "imgselect/pics";
    if(isset($_POST['submit'])){
        $jname = $_POST['jname'];
        $jcategory = $_POST['jcategory'];
        $jdescription = $_POST['jdescription'];
        $jqualification = $_POST['jqualification'];
        $img=$_FILES["img"]["name"];
        $targetImage = $targetDir . $img;
        $finaltargetImage = $finalpath . $img;

	      //echo $img;
        //$pimg = $_POST['pimage'];
        //print_r($_FILES);
        // $img=$_FILES["pimage"]["name"];
        // $img2=$_FILES["pimage"]["full_path"];
        // $img3=$_FILES["pimage"]["type"];
        
        //$pimg=$_FILES["pimage"]["type"];
        //$img2=$_FILES["pimage"]["full_path"];
        //$img3=$_FILES["pimage"]["size"];
       
        move_uploaded_file($_FILES["img"]["tmp_name"],$targetImage);
       


        //move_uploaded_file($_FILES["pimage"]["tmp_name"],"../seller/photos/".$img);
        $q = "INSERT INTO tbl_job (jid,jname,jcategory,jdescription,jqualification,img) VALUES (null,'$jname', '$jcategory', '$jdescription','$jqualification','$finaltargetImage')";
        $query = mysqli_query($conn,$q);
        if($query){
            echo "<script>alert('New Job Added Successfully...');</script>";
            header('jobindex.php');
        }
        else{
          echo "<script>alert('Not added !!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>Seller</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="jobindex.php">Company Form</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="jobindex.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Add.php"><span style="font-size:larger;">Add New Job</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
   
 <div class="col-lg-6 m-auto">
 
 <form method="post" action="#" enctype="multipart/form-data" onsubmit="return validate();">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Add Job </h1>
 </div><br>
 
              

 <label> Job Name: </label>
 <input type="text" name="jname" id="pName" autofocus="false" autocomplete="off" class="form-control"  placeholder="Enter Job Name" required> <br>

 <label> Job category </label>
 <input type="text" name="jcategory" id="pPrice" autofocus="false" autocomplete="off" class="form-control"  placeholder="Enter Job Category" required> <br>

 <label> Description </label>
 <input type="text" name="jdescription" id="pOffer" autofocus="false" autocomplete="off" class="form-control"  placeholder="Enter Job Description" required> <br>
 
 <label> Qualification </label>
 <input type="text" name="jqualification" id="pFeature" autofocus="false" autocomplete="off" class="form-control"  placeholder="Enter Job Qualificaton" required> <br>

 <label> Upload Image: </label>
 <input type="file" name="img" id="pImage" autofocus="false" autocomplete="off" class="form-control" required> <br>

 

 <button class="btn btn-success" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="sellerindex.php"> Cancel </a><br>

 </div>
 
 </form>
 </div>
 <script src="add.js"></script>
</body>
</html>