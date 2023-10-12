<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <link rel="stylesheet" href="./css/index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700&family=Orbitron&display=swap"
    rel="stylesheet"
  />
  <!-- import for 3d Modelling -->
  <script
    type="module"
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"
  ></script>
  <script
    nomodule
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"
  ></script>
  <body>
    <!-- progress bar starts -->
    <div class="reading-indicator"></div>
    <!-- progress bar ends -->

    <!-- Registering new user start-->
    <?php 
      include('./database_connection/admin_connection.php');
      if(isset($_POST['signup-submit-btn'])){
        $signup_name = $_POST['signup_name'];
        $signup_email =$_POST['signup_email'];
        $signup_password = $_POST['signup_password'];
        if($signup_name !="" && $signup_email !="" && $signup_password !=""){

        $sql1 = "SELECT * FROM `user` WHERE user_email = '$signup_email'";
        $result1 = mysqli_query($conn,$sql1);

        $sql2 = "SELECT * FROM `agency` WHERE agency_email = '$signup_email'";
        $result2 = mysqli_query($conn,$sql2);

        if(mysqli_num_rows($result1) == 0 && mysqli_num_rows($result2) ==0 ) {
            $sql3 = "INSERT INTO `user` (`user_name`, `user_email`, `user_password`) VALUES ('$signup_name', '$signup_email', '$signup_password')";
            $query = mysqli_query($conn,$sql3);
           echo "<script>alert('Account Registered Successfully')</script>";

        }else{
           echo "<script>alert('Sorry... email already taken')</script>";
        }
        }
      }
    ?>
    <!-- Registering new user end-->

    <!-- logged new user start-->
  <?php
  error_reporting(0);
    if(isset($_POST['login-submit-btn'])){
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];


    if($loginEmail !="" && $loginPassword !="" ){

      $sql = "SELECT * FROM user WHERE user_email='$loginEmail' and user_password = '$loginPassword'";
      $res = mysqli_query($conn, $sql);

      if(mysqli_num_rows($res) == 1) {
        while( $val = mysqli_fetch_assoc($res)){
         echo "<script>alert('Logged In Successfully.')</script>";
        // creating Session    
         session_start();
         $_SESSION['user_email'] = $val['user_email'];
         $_SESSION['user_id'] = $val['id'];

        }
      }else{
         echo "<script>alert('Sorry...Wrong Credentials')</script>";
      }
    }}  
  ?>
    <!-- logged new user end-->

    <!-- Login Modal Start -->
    <section class="login-modal center unactive">
      <span id="login-CrossBtn">&cross;</span>
      <div class="login-container center">
        <h1 class="headline">Login Form</h1>
        <form class="login-form" method="post" autocomplete="off">
          <p>
            <label for="login_email" class="label-text">Email</label>
            <input
              type="email"
              placeholder="email@email.com"
              autocomplete="off"
              name="loginEmail"
            />
          </p>
          <p>
            <label for="login_password" class="label-text">Password</label>
            <input
              type="password"
              placeholder="**********"
              name="loginPassword"
            />
          </p>
          <input type="submit" class="login-submit-btn" name="login-submit-btn" value="Login" />
        </form>
      </div>
    </section>
    <!-- Login Modal End-->

    <!-- Signup Modal Start -->
    <section class="signup-modal center unactive">
      <span id="signup-CrossBtn">&cross;</span>
      <div class="signup-container center">
        <h1 class="headline">Registration Form</h1>
        <form action="#" class="signup-form" method="post" autocomplete="off">
          <p>
            <label for="signup_name" class="label-text">Name</label>
            <input
              type="text" 
              required
              placeholder="John Doe"
              name="signup_name"
              autocomplete="off"
            />
          </p>
          <p>
            <label for="signup_email" class="label-text">Email</label>
            <input
              type="email"
              required
              placeholder="email@email.com"
              autocomplete="off"
              name="signup_email"
            />
          </p>
          <p>
            <label for="signup_password"  class="label-text">Password</label>
            <input
              type="password"
              required
              name="signup_password"
              placeholder="**********"
            />
          </p>
          <input type="submit" class="signup-submit-btn" name="signup-submit-btn" value="signup" />
        </form>
      </div>
    </section>
    <!-- Signup Modal End-->

    <!-- section 1 -- Image + navbar  -->
    <section class="section--1">
      <!-- navbar starts -->
      <nav class="navbar">
        <ul class="nav-links center left-link-section">
          <span class="nav-link" id="about-link">About</span>
          <span class="nav-link" id="offers-link">offers</span>
          <span class="nav-link" id="vehicles-link">vehicles</span>
        </ul>
        <ul class="nav-links center center-link-section">
          <span class="logo">HireCars</span>
        </ul>
        <ul class="nav-links center right-link-section">
          <?php
            session_start();
            if(isset($_SESSION['user_email'])){
              echo '<a class="nav-link" 
              href="./user_BookedVehicle.php"
              id="booked_Vehicle" >Booked Vehicles</a>';
              echo '<a class="nav-link" href="./user_logout.php" id="logout" >Logout</a>';
            }else{
              echo '  <span class="nav-link" id="login">Login</span>
              <span class="nav-link" id="signup">Signup</span>';
            }
          ?>
        </ul>
      </nav>
      <!-- navbar ends -->
      <div class="heading-section">
        <p class="headline">
          Luxuary car<br /><span class="highlight">rental in Bharat</span>
        </p>
        <button class="rent-now-btn" id="rentNow"><a href="http://localhost/car-rental-project/allCars.php">Rent Now</a></button>
      </div>
    </section>
    <!-- section 1 End -->
    
  

    <!-- section 2 start --  About section-->
    <section class="section--2">
      <div class="section--2--part section--2-partA">
        <h1 class="section--2--part-headline">About Us</h1>
        <p class="section--2--part-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur
          dolorem quia amet ullam illum doloremque? Autem quos ratione, culpa
          illum saepe harum nisi aut quas, nam cumque beatae labore nemo placeat
          recusandae eligendi esse nostrum voluptates minima debitis laudantium
          cum libero unde .
        </p>
        <p class="section--2--part-description">
          Nostrum ad, in illum reiciendis animi dicta molestiae, molestias omnis
          quos, non dolorum! Sequi officia, temporibus quos quibusdam iure minus
          provident quisquam nisi laboriosam hic natus optio nam deleniti
          debitis pariatur consequuntur ut deserunt, inventore fugit ullam?
          Placeat, excepturi distinctio.
        </p>
      </div>
      <div class="section--2--part section--2-partB"></div>
      <div class="section--2--part section--2-partC">
        <p class="center">
          <span>+10 year</span>
          <span>Experience</span>
        </p>
        <p></p>
      </div>
    </section>
    <!-- section 2 End -->

    <!-- section 3 start -- Best Offers -->
    <section class="section--3">
      <div class="bestOffers center">
        <h1 class="headline">Best Offer</h1>
        <p class="section--3--part-description">
          <span class="highlight-2">Tesla Model S &nbsp;&rightarrow;</span
          ><br />for $400/day
        </p>
        <button class="rent-now-btn2"><a href="http://localhost/car-rental-project/allCars.php">Rent Now</a></button>
      </div>
      <model-viewer
        loading="eager"
        disable-zoom
        disable-tap
        poster="https://imgs.search.brave.com/sFGgYB7EVTnY8Tk-iEh-etetBypkjsjVIqTiTI8e5Vg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9paDEu/cmVkYnViYmxlLm5l/dC9pbWFnZS4yNzQ5/MDcxNDI0LjE0NjIv/cG9zdGVyLDUwNHg0/OTgsZjhmOGY4LXBh/ZCw2MDB4NjAwLGY4/ZjhmOC51My5qcGc"
        src="./assets/tesla_2018_model_3.glb"
        alt="VR Headset"
        auto-rotate
        camera-controls
        ar
      ></model-viewer>
    </section>
    <!-- section 3 End -->

    <!-- section 4 start --Vehicles -->
    <section class="section--4">
      <div class="vehicles--part-top-section center">
        <div class="vehicles--part-top-section-left">
          <h1 class="headline">Top Vehicles</h1>
          <span class="vehicles--top-desc center"></span>
        </div>
        <div>
        <button class="rent-now-btn2"><a href="http://localhost/car-rental-project/allCars.php">See All</a></button>
        </div>
      </div>
      <div class="vehicles--part-caroursel">
        <div class="card card1">
          <span class="car-name">Mclaren 720s</span>
          <span class="car-price">$450/day</span>
          <span
            class="car-image"
            style="
              background-image: url('https://cars.mclaren.com/content/dam/mclaren-automotive/models/720s/720s/sustainment-2021/images/configurator.png');
            "
          >
          </span>
        </div>
        <div class="card card2">
          <span class="car-name"> Bentayga EWB A</span>
          <span class="car-price">$500/day</span>
          <span
            class="car-image"
            style="
              background-image: url('https://www.bentleymotors.com/content/dam/bentley/Master/Models/derivative-strategy-/bentayga-ewb/ewb-a/Bentayga%20EWB%20A%2024MY%20-%20Front%203Q_V3_RGB%201366x477.jpg/_jcr_content/renditions/original.image_file.1366.477.file/Bentayga%20EWB%20A%2024MY%20-%20Front%203Q_V3_RGB%201366x477.jpg');
            "
          >
          </span>
        </div>
        <div class="card card3">
          <span class="car-name">rolls royce spectre</span>
          <span class="car-price">$600/day</span>
          <span
            class="car-image"
            style="
              background-image: url('https://www.rolls-roycemotorcars.com/content/dam/rrmc/marketUK/rollsroycemotorcars_com/spectre-ii/page-properties/Tiles-Single-Spectre-InMotion2.jpg/jcr:content/renditions/cq5dam.web.1920.webp');
            "
          >
          </span>
        </div>
        <div class="card card4">
          <span class="car-name">Ferrari SF90 Stradale</span>
          <span class="car-price">$670/day</span>
          <span
            class="car-image"
            style="
              background-image: url('https://gcb.evs.onl/d4/3012/1596615/10527326/o/df67f79cb0f345eda6b36eed93716840.jpg');
            "
          >
          </span>
        </div>
        <div class="card card5">
          <span class="car-name">Range rover SV</span>
          <span class="car-price">$700/day</span>
          <span
            class="car-image"
            style="
              background-image: url('https://imgs.search.brave.com/hOg21-AKEweQJfsQ10Rw4tvDyq_ENok1Sbs8ObjGTV8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/aG9uZXN0am9obi5j/by51ay9tZWRpYS9q/ZGNhY3F2Zi9yYW5n/ZS1yb3Zlci1zcG9y/dC1zdi0yMDI0LTAz/LmpwZz93aWR0aD02/MjA');
            "
          >
          </span>
        </div>
        <div class="card card6">
          <span class="car-name">Lexus RZ 450e PREMIUM AWD</span>
          <span class="car-price">$920/day</span>
          <span
            class="car-image"
            style="
              background-image: url('https://imgs.search.brave.com/cmlQ08z1MKVybIvTg3t7yC_TpNE4dET6l7BnVpt7l-k/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuY2FyZXhwZXJ0/LmNvbS5hdS9jcm9w/LzUwMC8zNzUvYXBw/L3VwbG9hZHMvMjAy/Mi8wNC82Mzg4NExl/eHVzLVJaLTQ1MGUu/anBn');
            "
          >
          </span>
        </div>
      </div>
    </section>
    <!-- section 4 End-->

    <!-- Footer starts -->     
       <?php include('./footer.php')?>
    <!-- Footer End -->
    <script src="js/script.js"></script>
  </body>
</html>
