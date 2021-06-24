<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SECUREtranfer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/user.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/user.js"></script>
</head>

<body>

        <nav id="sidenav" role="navigation" class="sidenav">
                
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#side">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div id="side">
                <a class="action" href="user.php">Home</a>
                <a href="load.php">Load Account</a>
                <a href="send.php">Send money</a>
                <a href="transac.php">view transactions</a>
                <a href="php/logout.php">Sign out</a>
                </div>
        </nav>
                
                       
        <div id="page-content">
                
            <div class="wrapper" id="main">
                <div id="home" class="container">
                <div class="jumbotron text-center">
                <h1 id="welcome">Welcome <?php require("php/signin1.php"); echo $_SESSION["username"];?></h1>
                </div>
                </div>
                
                <div id="home" class="container">
                <div class="jumbotron text-center">
                <h2 id="welcome">#<?php require("php/view.php");?></h2>
                </div>
                </div>

                <!-- <div id="home" class="container">
                <div class="jumbotron text-center">
                <h3 id="welcome">Latest Transactions</h3>
                </div>
                </div> -->
                
            </div>
        </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="/Users/apple/Documents/neww/TT user page/jquery-3.3.1.min.js"></script>



</body>

</html>
