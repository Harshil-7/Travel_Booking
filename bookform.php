<?php

    $conn = mysqli_connect('localhost','root','','travel_booking');
    if(!$conn)
    {
        die ("Error".mysqli_connect_error());
    }

    if(isset($_POST['send']))
    {
        $name = $_POST['name']; 
        $email = $_POST['E-mail']; 
        $phone = $_POST['phone']; 
        $location = $_POST['Trip']; 
        $date = $_POST['Date']; 

        $request = "INSERT INTO `booking_form` (`Name`, `E-mail`, `Phone`, `Location`, `Date`) VALUES ( '$name', '$email', '$phone', '$location', '$date')";

        mysqli_query($conn,$request);
        header('location:index.html');

    }

    else{
        echo "something went wrong try agin!!!";
    }
?>