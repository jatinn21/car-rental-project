<?php

session_start();
error_reporting(0);
include('./database_connection/admin_connection.php');
$sql = "select * from agency where agency_email = '$_SESSION[email]'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $agency_name = $row['agency_name'];
    $agency_email = $row['agency_email'];
    $agency_password = $row['agency_password'];
    $agency_id = $row['agency_id'];

    $_SESSION['id'] = $agency_id;
}

echo '
    <section class="sidebar">
      <div class="top_side center">
        <img src="./assets/images/default-user-image.jpg" class="agency_img" />
        <p class="greeting_name">
          Hello,
          <span id="agency_name">'.$agency_name.'</span>
        </p>
      </div>
      <div class="bottom_side center" id="bottom_side_sidebar">
        <a class="agency_feature" id="dashboard_Btn" href="./adminDashboard.php">Dashboard</a>
        <a class="agency_feature" id="addCar_Btn" href="./admin_AddCar.php">Add Car</a>
        <a class="agency_feature" id="viewAllCar_Btn" href="./admin_ViewCars.php">View All Cars</a>
        <a class="agency_feature" id="updateCar_Btn" href="./admin_UpdateCar.php">Update Car</a>
        <a class="agency_feature" id="deleteCar_Btn" href="./admin_DeleteCar.php">Delete Car</a>
        <a class="agency_feature logout_btn" id="logout_Btn" href="./admin_LogOut.php">Logout</a>
      </div>
    </section>';

?>