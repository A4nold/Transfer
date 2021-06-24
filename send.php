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

    <form class="form-signup px-5 pb-5" action="php/send1.php" method="post" enctype="multipart/form-data">

        <fieldset>
            <legend>Send SECUREtransfer</legend>
            <div class="label-group">
                <input type="text" name="amount" placeholder="0.00" class="form-control" id="fname" required>
                <label for="fname">Name</label>
            </div>

            <div class="label-group">
                <input type="text" maxlength="10" name="accountno" placeholder="enter account number" class="form-control" id="lname" required>
                <label for="lname">Name</label>
            </div>

            <div class="label-group">
                    <input type="password" name="password" placeholder="Enter password" class="form-control" id="inputname" required>
                    <label for="inputname">Username</label>
            </div>

        </fieldset>
        <!-- <a class="btn btn-lg btn-outline-success btn-block btn-block" href="user.html">Sign Up</a> -->
        <input type="submit" name="button" value="SEND" class="btn btn-sm btn-outline-success btn-block btn-block">
    </form>
    

   
   
    
    
</body>
</html>