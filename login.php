<?php
    session_start();

    include('db.php');
    if(isset($_POST['send']))
    {
    
            $email = $_POST['email'];
            $pwd = $_POST['pswd']; 
            if (!empty($email) && !empty($pwd) && !is_numeric($eid))
            {
               
                $sql = "SELECT * FROM `users` WHERE email = '$email' limit 1";
                $result = mysqli_query($conn , $sql);

                if ($result) {
                    if ($result && mysqli_num_rows($result) > 0) {
                        $user_data = mysqli_fetch_assoc($result);

                        if ($user_data['pw'] == $pwd) {
                            header('location:Home.html');
                            die();
                        }
                    }
                }
                echo"<script> alert('wrong username or password')</script>";
            }
            else {
                echo"<script> alert('wrong username or password')</script>";
            }
    }
       
?>