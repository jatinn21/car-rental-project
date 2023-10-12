<?php
    session_start();
    session_destroy();

    function LoggedOut() {   
        echo "<script>alert('Logged Out Successfully, Bye!!')</script>";
        echo "<script>window.location.href = 'http://localhost/car-rental-project/' </script>";
    }
    LoggedOut();
?>