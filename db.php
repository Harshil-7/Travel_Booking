<?php
    $conn = mysqli_connect("localhost","root","","travel_booking");

    if(!$conn)
    {
        die(mysqli_connect_error());
    }
    
?>