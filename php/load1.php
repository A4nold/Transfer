<?php 

    $dbconnect = mysqli_connect("localhost","root","","finalproject") or die ("Failed to connect !!!");

        $currentbal = 0;
        $paying = intval($_POST['amount']);
        $currentbal = $currentbal + $paying;

        $cardno = intval($_POST['cardno']);
        $pin = md5(intval($_POST['pin']));
        $cvv = md5(intval($_POST['cvv']));


        $add = "insert into `load` (amount,cardno,pin,cvv) values 
                ('$currentbal','$cardno','$pin','$cvv')";

        $check = mysqli_query($dbconnect, $add);

        if ($check) {
            # code...
            echo "<h1>Amount Loaded</h1>";
            echo "<a href='../user.php'>Click to go back</a>";
        }

 ?>