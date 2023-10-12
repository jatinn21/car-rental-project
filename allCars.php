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
    <?php 
      include('./database_connection/admin_connection.php');
      $sql = "SELECT * FROM `car` WHERE `car_status` = 'UNBOOK' ";
      $result =  mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){
        echo "<section class='cars-cards'>";
            while( $val = mysqli_fetch_assoc($result)){
              echo  '<div class="car-card" style="height:100%">
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
              <form action="./carDetails.php" method="get">
              <input type="hidden" name="utm_source" value="'.$val['car_id'].'" /> 
              <input type="submit" class="car-details-btn"  value="Way to book..."/>
              </form>  
              </p>
            </div>';
            }
      }
      else{
        echo "<h1 width='max-content' style='text-align:center;color:orangered;font-size:6rem'>No Cars are available</h1>";
        }    
      ?>
    </section>
    <!-- Cards Section End -->


      <!-- Footer Start -->
      <?php include('./footer.php') ?>
      <!-- Footer End -->

    <script src="./js/allCars.js"></script>
  </body>
</html>
