<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Feature</title>
  </head>
  <link rel="stylesheet" href="./css/adminDashboard.css" />
  <body>
    <!-- Sidebar start -->
    <?php
    error_reporting(0);
    session_start();
    include('./admin_sideBar.php');
     ?>
    <!-- Sidebar end -->

    <!-- Adding data to database Start-->
    <?php
        include('./database_connection/admin_connection.php');

        if(isset($_POST['updateCar_form_submit_Btn'])){
            $car_id = $_POST['car_id'];
            $car_name = $_POST['car_name'];
            $car_model = $_POST['car_model'];
            $car_number = $_POST['car_number'];
            $car_seat = $_POST['car_seat'];
            $car_rent = $_POST['car_rent'];
            $car_image = $_POST['car_image'];
            $agency_id = $_SESSION['id'];


            if($car_id != "" && $car_name !="" && $car_model !="" && $car_number!="" && $car_seat != "" && $car_rent != "" ){
                if($car_image != ""){      
                    $sql = "UPDATE `car` SET `car_name` = '$car_name', `car_image` = '$car_image', `car_model` = '$car_model', `car_number` = '$car_number', `car_seats` = '$car_seat', `car_rent` = '$car_rent' WHERE `car`.`car_id` = '$car_id'";
                }
                else{
                    $sql = "UPDATE `car` SET `car_name` = '$car_name', `car_model` = '$car_model', `car_number` = '$car_number', `car_seats` = '$car_seat', `car_rent` = '$car_rent' WHERE `car`.`car_id` = '$car_id'";
                }

                $res = mysqli_query($conn, $sql);
                
                echo "$res";

                if($res) {
                    echo "oop1";
                   echo "<script>alert('Record Updated Successfully')</script>";    
                }else{
                    echo "oop2";

                   echo "<script>alert('Problem !! Failed to Update the Car ID = '$car_id'  record')</script>";
                }
            }

        }
    ?>
    <!-- Adding data to database End-->

     <section class="admin_addCar_body center">
      <form action="#" method="post" class="addCar_form" id="addCar_form" autocomplete="on">
      <p>
          <label>Car ID To Update*</label>
          <input
            class="car_form_field_input"
            type="text"
            name="car_id"
            required
            id="car_name_Field"
            placeholder="Enter the Id you want to update"
          />
        </p>
        <p>
          <label>Car Name*</label>
          <input
            class="car_form_field_input"
            type="text"
            name="car_name"
            required
            id="car_name_Field"
            placeholder="Mercedez, Audi, Ferrari..."
          />
        </p>
        <p>
          <label>Car Model*</label>
          <input
            class="car_form_field_input"
            type="text"
            required
            name="car_model"
            id="car_model_Field"
            placeholder="E-class, A1, Tipo 815 ..."
          />
        </p>
        <p>
          <label>Car Number*</label>
          <input
            class="car_form_field_input"
            type="text"
            required
            name="car_number"
            id="car_number_Field"
            placeholder="GJ-06-JK-9980"
          />
        </p>
        <p>
          <label>Seating Capacity*</label>
          <input
            class="car_form_field_input"
            type="text"
            required
            name="car_seat"
            id="car_seat_Field"
            placeholder="Seat Capacity"
          />
        </p>
        <p>
          <label>Car Rent per Day*</label>
          <input
            class="car_form_field_input"
            type="text"
            required
            name="car_rent"
            id="car_rent_Field"
            placeholder="Enter the price/day"
          />
        </p>
        <p>
          <label>Car Image</label>
          <input
            class="car_form_field_input"
            type="url"
            name="car_image"
            id="car_image_Field"
            placeholder="Enter the image url"
          />
        </p>
        <input
          type="submit"
          name="updateCar_form_submit_Btn"
          class="addCar_form_submit_Btn"
        />  
    </form>
    </section>
  </body>
</html>
