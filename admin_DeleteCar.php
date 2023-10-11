<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="./css/adminDashboard.css" />
<body>
    
<!-- Sidebar start -->
<?php include('./admin_sideBar.php') ?>
<!-- Sidebar end -->

<!-- Delete setting start -->
<?php
    if(isset($_POST['deleteCar_form_submit_Btn'])){
        $car_id = $_POST['car_id'];
        if($car_id !=""){
            // check whether there is any record or not with that id
            $sql = "SELECT * FROM `car` WHERE `car`.`car_id` = '$car_id'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) ==1){                
                $sql2 = "DELETE FROM `car` WHERE `car`.`car_id` = '$car_id'";
                $res = mysqli_query($conn, $sql2);
                if($res){
                    echo "<script>alert('Record Deleted Successfully')</script>";
                    // header('location:http://localhost/car-rental-project/admin_ViewCars.php');
                }
                else{
                    echo "<script>alert('OOPs, Failed To Delete the Record')</script>";
                }
            }
            else{
                echo "<script>alert('No Record Found')</script>";

            }
        }
    }
?>
<!-- Delete setting end -->

<section class="admin_addCar_body center">
      <form action="#" method="post" class="addCar_form" id="addCar_form" autocomplete="off">
        <p>
            <label 
          >Car Id</label>
          <input
            class="car_form_field_input"
            type="text"
            name="car_id"
            required
            id="car_name_Field"
            placeholder="Enter the Car Id that you want to delete"
          />
        </p>
        <input
          type="submit"
          name="deleteCar_form_submit_Btn"
          class="addCar_form_submit_Btn"
        />  
    </form>
</body>
</html>