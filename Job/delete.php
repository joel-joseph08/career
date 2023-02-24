<?php
    include "../dbconn.php";
    if(isset($_GET['jid'])){
        $jid = $_GET['jid'];
        // $sql = "DELETE from `tbl_products` where product_id=$pid";
        $sql= "UPDATE tbl_job SET jstatus=0 WHERE jid=$jid";
        $conn->query($sql);
    }
    header('location:jobindex.php');
    exit;
?>
