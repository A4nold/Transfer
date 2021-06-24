<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SECUREtranfer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/signup.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/signup.js"></script>
  
</head>
<body class="body">
    <form class="form-signup px-5 pb-5" action="php/insert.php" method="post" enctype="multipart/form-data">
        <h2 class="text-center">SECUREtransfer</h2>

        <fieldset>
            <legend>User Details:</legend>
            <div class="label-group">
                <input type="text" name="firstname" placeholder="Enter First Name" class="form-control" id="fname" required>
                <label for="fname">Name</label>
            </div>

            <div class="label-group">
                <input type="text" name="lastname" placeholder="Enter Last Name" class="form-control" id="lname" required>
                <label for="lname">Name</label>
            </div>

            <div class="label-group">
                    <input type="text" name="username" placeholder="Enter Username" class="form-control" id="inputname" required>
                    <label for="inputname">Username</label>
            </div>

            <div class="label-group">
                    <input type="text" name="email" placeholder="Enter Email" class="form-control" id="mail" required>
                    <label for="mail">Email</label>
            </div>
        </fieldset>

        <fieldset>
            <legend>Security:</legend>
         <div class="form-group">
            <input  type="password" name="password" placeholder="Enter Password" class="form-control" id="inputpassword" required>
            
        </div>

        <div class="form-group">
            <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" id="confirmpassword" required>    
        </div>

        <p id="message"></p>
        </fieldset>

        <!-- <a class="btn btn-lg btn-outline-success btn-block btn-block" href="user.html">Sign Up</a> -->
        <input type="submit" name="button" value="Sign Up" class="btn btn-lg btn-outline-success btn-block btn-block">
    </form>
    

   
   
    
    
</body>
</html>