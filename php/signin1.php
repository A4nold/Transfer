<?php
session_start();
$dbconnect = mysqli_connect("localhost", "root", "", "finalproject") or die("Couldnt establish database connection !!!");

if(isset($_POST["Login"])){
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = mysqli_real_escape_string($dbconnect, $_POST["username"]);
        $password = mysqli_real_escape_string($dbconnect, $_POST["password"]);

        $query = "select UserID from register WHERE username = '".$username."' AND password = '".$password."'";
        $fetch = mysqli_query($dbconnect, $query);
        $numrow = mysqli_num_rows($fetch);

        if($numrow > 0){

            $fetchdata = mysqli_fetch_array($fetch);
            $_SESSION["username"] = $fetchdata["username"];
            $_SESSION["username"] = $username;

            
            header("location:user.php");
        }else{
            $echo = "Incorrect username or password";
        }
    }else{
        echo "Nothing Posted";
    }  
}
?>