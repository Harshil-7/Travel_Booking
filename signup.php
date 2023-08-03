<?php
    session_start();

    include("db.php");
   
        $name = $_POST['Username']; 
		$email = $_POST['email']; 
		$pwd = $_POST['pswd']; 

       
        $dublicate = "SELECT * FROM `users` WHERE email = '$email' OR pw = '$pwd'";
        $ans = mysqli_query($conn,$dublicate);
        if ($ans && mysqli_num_rows($ans) > 0) {
            echo"<script> alert(' username or password is already taken')</script>";
        }

        elseif (!empty($email) && !empty($pwd) && !is_numeric($email)) {
            $sql = "INSERT INTO `users` ( `User Name`, `email`, `pw`) VALUES ( '$name', '$email', '$pwd')";

            mysqli_query($conn,$sql);
            echo"<script> alert('Successfully Register')</script>";
            header('location:Home.html');
            
        }
        else {
            echo"<script> alert('Please enter some valid information')</script>";
        }

    
?>