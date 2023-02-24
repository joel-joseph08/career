<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> form</title>

    <style>
      #s_img{
        height: 150px;
      }

      #s_feature,#s_name{
        overflow: hidden;
        width: 100%;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="jobindex.php">JOB Details</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="jobindex.php">Home</a>
            </li>
            <li class="nav-item">
              <a type="button" class="btn btn-primary nav-link active" href="Add.php">Add New Job</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <!-- <th>Product Id</th> -->
        <th>Job Name</th>
        <th>category</th>
        <th>Description</th>
        <th>Qualification</th>
        <th>Upload image</th>

        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
   
      <?php
        include "../dbconn.php";
        $sql = "select * from tbl_job where jstatus=0";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){

          $url = $row['img'];
          $formatted_url = filter_var($url, FILTER_SANITIZE_URL);
          if (filter_var($formatted_url, FILTER_VALIDATE_URL) !== false) {
            $img= $url;
          } else {
            $pimage= "../".$url;
          }

          echo "
      <tr>
       
        <td><p id='s_name'>$row[jname]</p></td>
        <td>$row[jcategory]</td>
        <td>$row[jdescription]</td>
        <td><p id='jqualification'>$row[jqualification]</p></td>
        <td><img id='img' src='$pimage' alt='$row[img]'></td>
        <td>
                  <a class='btn btn-success' href='edit.php?pid=$row[jid]'>Edit</a>
                  <a class='btn btn-danger' href='delete.php?pid=$row[jid]'>Delete</a>
                </td>
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>