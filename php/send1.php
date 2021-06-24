<?php 

    $dbconnect = mysqli_connect("localhost","root","","finalproject") or die ("Failed to connect !!!");


        $sending = intval($_POST['amount']);
        $accno = $_POST['accountno'];
        $password = $_POST['password'];



        $add = "insert into sent (sent,accno,pass) values 
                ('$sending','$accno','$password')";

        $check = mysqli_query($dbconnect, $add);

        if ($check) {
            # code...
            echo "<h1>Amount sent</h1>";
            echo "<a href='../user.php'>Click to go back</a>";
        }

 ?>