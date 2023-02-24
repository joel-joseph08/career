<?php include ('../config.php');
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_products WHERE id='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) 
     {
        echo '<script type="text/javascript"> alert("ROW DELETED")</script>';
        header("Location:viewproduct.php");
        
     }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
} 
?>
