<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css" />
</head>
<body class="center" style="flex-direction:column;gap:4rem
">
    <a href="http://localhost/car-rental-project/adminDashboard.php" id="backToHome" class="center">Back</a>
    <h1>All Your Vehicles that other have booked  : </h1>
    <table class="styled-table">
    <thead>
        <tr>
        <th>Car ID</th>
            
            <th>Car Name</th>
            <th>Car Model</th>
            <th>Car Number</th>
            <th>Seat capacity </th>
            <th>Car Price</th>
            <th>Customer Id</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include('./database_connection/admin_connection.php');
        error_reporting(0);
        session_start();
        include('./database_connection/admin_connection.php');
        $user_email = $_SESSION['email'];
        $user_id = $_SESSION['id'];
        $sql ="SELECT * FROM car WHERE car_status='BOOK' && agency_id='$user_id';";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($val = mysqli_fetch_assoc($result)){
                echo '<tr>  
                <td>'.$val['car_id'].'</td>
                <td>'.$val['client_id'].'</td>
                <td>'.$val['car_name'].'</td>
                <td>'.$val['car_model'].'</td>
                <td>'.$val['car_number'].'</td>
                <td>'.$val['car_seats'].'</td>
                <td>'.$val['car_rent'].'$</td>
                </tr>
                ';
            }
        }else{
            echo '<tr><td colspan="100%">No Sales....</td></tr>';
        }
            ?>
    </tbody>
</table>
</body>
</html>