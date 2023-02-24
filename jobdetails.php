<?php
    include 'dbconn.php';
    $sql="select * from tbl_job";
  
    $num_per_page= 03;
   
?>

<div id="products_container" class="container">
            <div class="row">

                <?php
                    // $product_sql= "SELECT * from tbl_products where prod_brand='Vivo'";
                    if(isset($_POST['filters_submitbtn']) && isset($_POST['filters'])){
                        $filter= $_POST['filters'];
                        $product_sql= "SELECT * from tbl_job where prod_brand='$filter'";
                    }
                    else{
                        $product_sql= "SELECT * from tbl_job WHERE jstatus!=0";

                        $results_per_page = 15;

                        // find out the number of results stored in database
                        $sql='SELECT * FROM tbl_job';
                        $result = mysqli_query($conn, $sql);
                        $number_of_results = mysqli_num_rows($result);

                        // determine number of total pages available
                        $number_of_pages = ceil($number_of_results/$results_per_page);

                        // determine which page number visitor is currently on
                        if (!isset($_GET['page'])) {
                        $page = 1;
                        } else {
                        $page = $_GET['page'];
                        }

                        // determine the sql LIMIT starting number for the results on the displaying page
                        $this_page_first_result = ($page-1)*$results_per_page;

                        // retrieve selected results from database and display them on page
                        $product_sql='SELECT * FROM tbl_job WHERE jstatus!=0 LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
                    }
                    
                    $prod_query= mysqli_query($conn, $product_sql);

                    while ($row = mysqli_fetch_array($prod_query)) {

                        $jid= $row[0];
                        $jname= $row[2];
                        $jcategory= $row[5];
                        $jdescription= $row[8];
                        $jqualification= $row[7];
                        $prod_feature= $row[13];
                        
                            echo '
                                <div class="col-md-4">
                                    <div class="service-item">
                                        <div id="product_img_div">
                                            <img src= "'.$img.'" id="product_img" alt="'.$jname.'">
                                        </div>
                                        <div class="down-content">
                                            <h4 id="jname">'.$jname.'</h4>
                                            <div style="margin-bottom:10px;">
                                                <span>
                                                    <del><sup>₹</sup>'.$prod_price.'</del> &nbsp; <sup>₹</sup>'.$prod_offer.'</span>
                                            </div>
                                            <p id="product_feat">'.$prod_feature.'</p>
                                            <a href="product-details.php?pid='.$prod_id.'" class="filled-button">View More</a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            ';

                    }
                    
                ?>

            </div>

