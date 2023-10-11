<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Cars</title>
  </head>
  <link rel="stylesheet" href="./css/allCars.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&family=Orbitron&display=swap"
    rel="stylesheet"
  />
  <body>
    <nav>
      <span> Welcome to our Garage : </span>
      <span class="allCars--backButton"> Back &leftarrow;</span>
    </nav>
    <section class="carourselParent">
      <div class="caroursel center">
        <p class="card">
          <span>BMW</span>
        </p>
        <p class="card">
          <span>Ferrari</span>
        </p>
        <p class="card">
          <span>Mercedes-Benz</span>
        </p>
        <p class="card">
          <span>Land rover</span>
        </p>
        <p class="card">
          <span>audi</span>
        </p>
        <p class="card">
          <span>Mini cooper</span>
        </p>
        <p class="card">
          <span>mc laren</span>
        </p>
        <p class="card">
          <span>Tesla</span>
        </p>
      </div>
      <div class="caroursel center">
        <p class="card">
          <span>BMW</span>
        </p>
        <p class="card">
          <span>Ferrari</span>
        </p>
        <p class="card">
          <span>Mercedes-Benz</span>
        </p>
        <p class="card">
          <span>land rover</span>
        </p>
        <p class="card">
          <span>audi</span>
        </p>
        <p class="card">
          <span>mini cooper</span>
        </p>
        <p class="card">
          <span>mc laren</span>
        </p>
        <p class="card">
          <span>Tesla</span>
        </p>
      </div>
    </section>

    <div class="caroursel__Title">Luxuries Cars on rent</div>
    <!-- Cards Section Start -->
    <section class="cars-cards">
      <?php 
      include('./database_connection/admin_connection.php');
      $sql = "SELECT * FROM `car`";
      $result =  mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
            while( $val = mysqli_fetch_assoc($result)){
              echo  '<div class="car-card">
              <img
                style="height:20rem;object-fit:cover"
                src="'.$val['car_image'].'"
                class="car-card-image"
                alt="car image"
              />
              <p class="car-name">'.$val['car_name'].'</p>
              <p class="car-model">'.$val['car_model'].'</p>
              <p class="car-price-amount">$'.$val['car_rent'].'/day</p>
              <p class="car-buttons">
                <span class="car-details-btn car-button">Way to book..</span>
              </p>
            </div>';
            }
      }
      else{
        echo "<h1 width='100%' style='text-align:center;color:red'>No Cars</h1>";
        }    
      ?>
      <!-- <div class="car-card">
         echo  '<div class="car-card">
              <img
                src="'.$val['car_image'].'"
                class="car-card-image"
                alt="car image"
              />
              <p class="car-name">'.$val['car_name'].'</p>
              <p class="car-model">'.$val['car_model'].'</p>
              <p class="car-price-amount">$'.$val['car_rent'].'/day</p>
              <p class="car-buttons">
                <span class="car-details-btn car-button">Way to book..</span>
              </p>
            </div>';



        <img
          src="https://cars.tatamotors.com/images/all-cars/punch-click-to-drive.png"
          class="car-card-image"
          alt="car image"
        />
        <p class="car-name">Mercedes-Benz</p>
        <p class="car-model">E-class</p>
        <p class="car-price-amount">$400/day</p>
        <p class="car-buttons">
          <span class="car-details-btn car-button">Way to book..</span>
        </p>
      </div> -->

      <!-- <div class="car-card">
        <img
          src="https://cars.tatamotors.com/images/all-cars/punch-click-to-drive.png"
          class="car-card-image"
          alt="car image"
        />
        <p class="car-name">Mercedes-Benz</p>
        <p class="car-model">E-class</p>
        <p class="car-price-amount">$400/day</p>
        <p class="car-buttons">
          <span class="car-details-btn car-button">Way to book..</span>
        </p>
      </div> -->
    </section>
    <!-- Cards Section End -->

    <!-- Car Booking Modal Start-->
    <section class="booking-modal center unactive">
      <span id="bookingModal-CrossBtn">&cross;</span>
      <div class="booking-container">
        <div class="top-booking-section">
          <img
            src="https://cars.tatamotors.com/images/all-cars/punch-click-to-drive.png"
            alt="photo"
          />
          <p class="car-brand-model center">
            <span><b>Car name : </b><span class="car-company-name">Mercedes-Benz</span></span>
            <span><b>Model : </b><span class="car-model-name">E-class</span></span>
          </p>
        </div>
        <div class="middle-booking-section">
            <p class="Booking-Car-Name center">
                <table class="styled-table">
                    <tbody>
                        <tr>
                            <th class="main-point">Vehicle Number</th>
                            <td>GJ-1A-A1466</td>
                        </tr>
                        <tr>
                            <th class="main-point">Seating Capacity</th>
                            <td>6 seats</td>
                        </tr>
                        <tr>
                            <th class="main-point">Price per day</th>
                            <td>600$</td>
                        </tr>
                        <tr>
                            <th class="main-point">Fuel</th>
                            <td>Petrol</td>
                        </tr>
                    </tbody>
                </table>
            </p>
        </div>
        <div class="bottom-booking-section">
                <span class="car-booking-btn car-button disableBtn">Book</span>
        </div>
      </div>
    </section>
      <!-- Car Booking Modal End-->
      
      <!-- Footer Start -->
      <?php include('./footer.php') ?>
      <!-- Footer End -->

    <script src="./js/allCars.js"></script>
  </body>
</html>
