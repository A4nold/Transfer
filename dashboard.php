<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
    <header class="dHeader">
        <h3>User's Full Name</h3>
    </header>
    <div class="page">
        <label><h1>Transactions</h1></label>
        <div class="requests">
            <ul>
                <li class="request">
                    
                    <div>
                        <h3>SENT</h3>
                        <p>from ekarnold</p>
                    </div>
                    <div class="options">
                        <div class="reject">#5000</div>
                    </div>
                </li>

                <li class="request">
                    <div>
                        <h3>RECIEVED</h3>
                        <p>to ekarnold</p>
                    </div>
                    <div class="options">
                        <div class="accept">#4000</div>
                    </div>
                </li>

                <li class="request">
                    <div>
                        <h3>RECIEVED</h3>
                        <p>to ekarnold</p>
                    </div>
                    <div class="options">
                        <div class="accept">#1000</div>
                    </div>
                </li>
                <li>
                <h3><a href="php/logout.php">Sign out</a></h3>
                </li>

            </ul>

        </div>
    </div>
</body>
</html>