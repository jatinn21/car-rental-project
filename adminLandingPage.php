<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<link rel="stylesheet" href="./css/adminLandingPage.css">
<body>

<!-- PHP CODE START -->

    <!-- Register New User -->
    <?php 
    include('./database_connection/admin_connection.php'); 
    if(isset($_POST['signupBtn'])){
        $agency_name = $_POST['agency_name'];
        $agency_email = $_POST['agency_email'];
        $agency_password = $_POST['agency_password'];


        if($agency_name !="" && $agency_name !="" && $agency_password !=""  ){

            $sql = "SELECT * FROM agency WHERE agency_email='$agency_email'";
            $res = mysqli_query($conn, $sql);

            if(mysqli_num_rows($res) == 0) {
                $query = mysqli_query($conn,"INSERT INTO agency ( `agency_name`, `agency_email`, `agency_password`) VALUES ('$agency_name', '$agency_email', '$agency_password')");
               echo "<script>alert('Account Registered Successfully')</script>";

            }else{
               echo "<script>alert('Sorry... email already taken')</script>";
            }
        }
    }

    if(isset($_POST['loginBtn'])){
        $agency_login_email = $_POST['agency_login_email'];
        $agency_login_password = $_POST['agency_login_password'];


        if($agency_login_email !="" && $agency_login_password !="" ){

            $sql = "SELECT * FROM agency WHERE agency_email='$agency_login_email' and agency_password = '$agency_login_password'";
            $res = mysqli_query($conn, $sql);

            if(mysqli_num_rows($res) == 1) {
               echo "<script>alert('Redirecting to Admin Dashboard')</script>";
              // creating Session    
               session_start();
               $_SESSION['email'] = $agency_login_email;
               $_SESSION['id'] = $agency_login_email;

               header("location:http://localhost/car-rental-project/adminDashboard.php");

            }else{
               echo "<script>alert('Sorry...Wrong Credentials')</script>";
            }
        }
    }
    
    ?>
<!-- PHP CODE END -->



    <div class="signup">
        <div class="leftside"></div>
        <div class="rightside">
            <div class="signupPart">
                <div class="top">
                    <div class="signupQuestion"> Don't have an account?</div>
                    <div class="signup-btn">Sign Up</div>
                </div>
                <div class="down">
                    <div class="signupQuestion"> Already have an account?</div>
                    <div class="signup-btn" id="login-btn">Login </div>
                </div>
            </div>
        </div>

    </div>
    <div class="promptBox">
        <form action="#" method="POST" class="signup__form">
            <div class="firstName signupBox">
                <input type="text" class="signupField" name="agency_name" id="firstName" placeholder="Agency name"
                    required>
                <label class="signupLabel">Agency name</label>
            </div>
            <div class="email signupBox">
                <input type="email" class="signupField" name="agency_email" id="signupEmail" placeholder="Email" required>
                <label class="signupLabel">Email</label>
            </div>
            <div class="pass signupBox">
                <input type="password" class="password signupField" name="agency_password" id="signPass" placeholder="Password"
                    required>
                <label class="signupLabel">Password</label>
            </div>
            <div class="login-btn signupBox ">
                <input type="submit" class="signupField" name="signupBtn" value="Create account" id="signupBtn">
            </div>
        </form>
    </div>
    <div class="login">
        <form action="#" method="POST" class="loginPart">
            <div class="username inputBox">
                <input type="email" class="inputField" name="agency_login_email" id="email" placeholder="Username" required>
                <label class="inputLabel">Username</label>
            </div>
            <div class="password inputBox">
                <input type="password" class="inputField" name="agency_login_password" id="password" placeholder="Password" required>
                <label class="inputLabel">Password</label>
            </div>
            <!-- <div class="loginBtn"> -->
            <div class="login-btn">
                <input type="submit" class="inputField" name="loginBtn" value="Log in" id="loginBtn">
            </div>
            <!-- </div> -->
        </form>
    </div>
    <script src="./js/adminLandingPage.js"></script>
</body>

</html> 