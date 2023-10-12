<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <link rel="stylesheet" href="./css/allCars.css"> -->
<link rel="stylesheet" href="./css/allCars.css" />
<body>
    
    <?php   
            include('./database_connection/admin_connection.php');
            if(isset($_GET['utm_source'])){
                $car_id =  $_GET['utm_source'];
            }
            
            $sql = "SELECT * FROM `car` WHERE car_id = '$car_id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) == 1){
                $record = mysqli_fetch_assoc($result);
                $car_name =  $record['car_name'];
                $car_model= $record['car_model'];
                $car_number= $record['car_number'];
                $car_seats = $record['car_seats'];
                $car_rent = $record['car_rent'];
                $car_image = $record['car_image'];
            }
            ?>
      <!-- Car Booking Modal Start-->
      <section class="booking-modal center ">
      <span id="bookingModal-CrossBtn">&leftarrow;</span>
      <div class="booking-container">
        <div class="top-booking-section">
          <img
            src="<?php echo $car_image; ?>"
            alt="photo"
          />
          <p class="car-brand-model center">
            <span><b>Car name : </b><span class="car-company-name"><?php echo $car_name ?></span></span>
            <span><b>Model : </b><span class="car-model-name"><?php echo $car_model ?></span></span>
          </p>
        </div>
        <div class="middle-booking-section">
            <p class="Booking-Car-Name center">
                <table class="styled-table">
                    <tbody>
                        <tr>
                            <th class="main-point">Vehicle Number</th>
                            <td><?php echo $car_number ?></td>
                        </tr>
                        <tr>
                            <th class="main-point">Seating Capacity</th>
                            <td><?php echo $car_seats ?> seats</td>
                        </tr>
                        <tr>
                            <th class="main-point">Price per day</th>
                            <td><?php echo $car_rent ?>$</td>
                        </tr>
                        <tr>
                            <th class="main-point">Fuel</th>
                            <td>Petrol</td>
                        </tr>
                    </tbody>
                </table>
            </p>
        </div>
        <?php
        error_reporting(0);
        session_start();
        if($_SESSION['user_email']){
            echo '<form action="#" method="post">
                <section class="bottom-booking-section center" style="font-size:2rem;justify-content:space-around;width:100%">

        <span>
            <label for="daysSelect">Select Number of Days : &nbsp;</label>
            <select id="daysSelect" style="font-size:2rem" name="daysValue" required>
                <option> 0</option>
                <option value="1"> 1 Day</option>
                <option value="2"> 2 Days</option>
                <option value="3"> 3 Days</option>
                <option value="4"> 4 Days</option>
                <option value="5"> 5 Days</option>
                <option value="6"> 6 Days</option>
                <option value="7"> 7 Days</option>
            </select>
        </span>
        <input type="submit" class="car-booking-btn car-button" style="cursor:pointer;padding:1rem 2rem;background-color:black;color:white;border:none" value="Book Now"/>
    </section>
</form>';
}else{
    echo "<h1> To Book, Please Log in with an account";
}
?>

<?php
    function bookingCar(){
        echo "<script>alert('Booked Successfully')</script>";
        echo "<script>window.location.href = 'http://localhost/car-rental-project/allCars.php' </script>";
    }    

    if(isset($_POST['daysValue'])){
        if($_POST['daysValue'] != 0){

            session_start();
            $client_id =  $_SESSION['user_id'];
            $sql = "UPDATE `car` SET `car_status` = 'BOOK', `client_id` = '$client_id' WHERE `car`.`car_id` = '$car_id'";
            $record2 =  mysqli_query($conn,$sql);
            if($record2){
                bookingCar();
            }else{
                echo "<script>alert('Booking Failed')</script>";
            }
         }
            else{   
                echo "<script>alert('Please insert Number of days!')</script>";
                }
    }

?>

      </div>
    </section>
      <!-- Car Booking Modal End-->
      <script>
        document.querySelector('#bookingModal-CrossBtn').addEventListener('click',()=>{
            window.location.href='http://localhost/car-rental-project/allCars.php';
        })
      </script>
</body>
</html>