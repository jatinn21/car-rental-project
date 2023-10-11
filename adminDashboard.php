<?php 
    include('./database_connection/admin_connection.php');
    session_start(); 
    error_reporting(0);

    $sql = "select * from agency where agency_email = '$_SESSION[email]'";
    $result = mysqli_query($conn, $sql);

    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $agency_name = $row['agency_name'];
        $agency_email = $row['agency_email'];
        $agency_password = $row['agency_password'];
        $agency_id = $row['agency_id'];

        $sql2 = "SELECT COUNT(*) AS COUNT FROM `car` WHERE agency_id = $agency_id";
        $result2 = mysqli_query($conn, $sql2);
        if($result2){
            $new_row = mysqli_fetch_assoc($result2);
            $agency_num_cars = $new_row['COUNT'];
        }
        else{
            echo "Error";
        }
    

    }    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <link rel="stylesheet" href="./css/adminDashboard.css" />
  <body>
    <!-- Sidebar start -->
    <?php include('./admin_sideBar.php') ?>
    <!-- Sidebar end -->

    <section class="admin_dashboard_body center">
      <div class="twoBoxDiv center">
        <span><i>Total Cars Uploaded</i></span>
        <span id="totalNumOfCars"><?php echo $agency_num_cars; ?></span>
      </div>
      <div></div>
    </section>
    <script src="./js/adminDashboard.js"></script>
  </body>
</html>
