<?php 

    $dbconnect = mysqli_connect("localhost","root","","finalproject") or die ("Failed to connect !!!");


        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpass = $_POST['confirmpassword'];


        $add = "insert into register (firstname, lastname, email, username, password, confirmpassword) values 
                ('$firstname','$lastname','$email','$uname','$pass','$cpass')";

        $check = mysqli_query($dbconnect, $add);

        if ($check) {
            # code...
            echo "<h1>Registration Successful</h1>";
            echo "<a href='../index.php'>Click to sign in</a>";
        }

 ?>