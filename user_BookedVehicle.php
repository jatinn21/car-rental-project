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
    <a href="http://localhost/car-rental-project/" id="backToHome" class="center">Back</a>
    <h1>All Vehicles that you have booked  : </h1>
    <table class="styled-table">
    <thead>
        <tr>
            <th>Car Name</th>
            <th>Car Model</th>
            <th>Car Number</th>
            <th>Seat capacity </th>
            <th>Car Price</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        session_start();
        include('./database_connection/admin_connection.php');
        $user_id = $_SESSION['user_id'];
        $sql ='SELECT * from car where car_status="BOOK" and client_id="'.$user_id.'"';
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($val = mysqli_fetch_assoc($result)){
                echo '<tr>  
                <td>'.$val['car_name'].'</td>
                <td>'.$val['car_model'].'</td>
                <td>'.$val['car_number'].'</td>
                <td>'.$val['car_seats'].'</td>
                <td>'.$val['car_rent'].'$</td>
                </tr>
                ';
            }
        }else{

        }
        // <tr>
        //     <td>Dom</td>
        //     <td>6000</td>
        // </tr>
            ?>
    </tbody>
</table>
</body>
</html>