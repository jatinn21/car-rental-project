<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./css/adminDashboard.css" />
<body>

<!-- Include Database start -->
<?php include('./database_connection/admin_connection.php') ?>
<!-- Include Database end -->
    
<!-- Sidebar start -->
<?php include('./admin_sideBar.php') ?>
<!-- Sidebar end -->

<section style="width:70%;">
<table class="styled-table" style="width:100%;">
    <thead>
        <tr>
            <th>Car Id</th>
            <th>Car Name</th>
            <th>Car Model</th>
            <th>Car Seat</th>
            <th>Car Rent/Day</th>
            <th>Car Image Url</th>
        </tr>
    </thead>
    <tbody id="tbody_id" >
        <?php 
        error_reporting(0);
        session_start();
        $agency_id =  $_SESSION['id'];
        // echo $agency_id;
        $sql = 'SELECT * FROM `car` WHERE `agency_id` = '.$agency_id.'';
        $result =  mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
                while( $val = mysqli_fetch_assoc($result)){
                echo '<tr >
                <td style="font-weight:900;color:red">'.$val["car_id"].'</td> 
                <td>'.$val["car_name"].'</td>
                <td>'.$val["car_model"].'</td>
                <td>'.$val["car_seats"].'</td>
                <td>'.$val["car_rent"].'</td>
                <td style="max-width:60%;overflow-x:scroll;word-wrap:break-word">'.$val["car_image"].'</td>
                </tr>'; 
            }
        }else{
            echo "<td colspan='100%' style='text-align:center;color:red'>No Entry</td>";
        }    
        
        ?>
    </tbody>
</table>

</section>

</body>
</html>