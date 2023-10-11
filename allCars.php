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
      <div class="car-card">
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
          <!-- <span class="car-booking-btn car-button">Book</span> -->
        </p>
      </div>
      <div class="car-card">
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
          <!-- <span class="car-booking-btn car-button">Book</span> -->
        </p>
      </div>
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
