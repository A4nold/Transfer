<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SECUREtranfer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/user.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/signup.js"></script>
  
</head>
<body class="body">

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

    <form class="form-signup px-5 pb-5" action="php/load1.php" method="post" enctype="multipart/form-data">

        <fieldset>
            <legend>Load SECUREtransfer</legend>
            <div class="label-group">
                <input type="text" name="amount" placeholder="0.00" class="form-control" id="fname" required>
                <label for="fname">Name</label>
            </div>

            <div class="label-group">
                <input type="text" maxlength="16" name="cardno" placeholder="xxxx-xxxx-xxxx-xxxx" class="form-control" id="lname" required>
                <label for="lname">Name</label>
            </div>

            <div class="label-group">
                    <input type="password" name="pin" placeholder="Enter pin" maxlength="4" class="form-control" id="inputname" required>
                    <label for="inputname">Username</label>
            </div>

            <div class="label-group">
                    <input type="password" name="cvv" placeholder="Enter cvv" class="form-control" id="mail" required>
                    <label for="mail">Email</label>
            </div>

            <div class="text-right mb-3" id="not">
            <a href="signup.php" target="_blank">What is cvv?</a>
        </div>
        </fieldset>
        <!-- <a class="btn btn-lg btn-outline-success btn-block btn-block" href="user.html">Sign Up</a> -->
        <input type="submit" name="button" value="LOAD" class="btn btn-sm btn-outline-success btn-block btn-block">
    </form>
    

   
   
    
    
</body>
</html>