<?php
    $dbconnect = mysqli_connect("localhost","root","","finalproject") or die ("Failed to connect !!!");

    $query = "select sum(amount) from `load`";
    $result = $dbconnect ->query($query);

    if($result -> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo $row["sum(amount)"];
        }
    }
?>