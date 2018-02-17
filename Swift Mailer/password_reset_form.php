<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Password Reset Form </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .form-gap {
    padding-top: 70px;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
  <form id="register-form" action="gmail.php" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      <?php
            if(isset($_GET['id']))
            {
            echo " <label style='color:red;text-align: center; width:100%; font-size:15px;'>You enter a worng email id please check..</label>  ";
         unset($_GET['id']);
            }
              error_reporting(0);
            ?>
            <?php
           
            if(isset($_GET['yymsg']))
            {
           echo " <label style='color:green;text-align: center; width:100%; font-size:15px;'>check your mail</label>          ";
         unset($_GET['yymsg']);
            }
            error_reporting(0);
            ?>
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                
    <p>
      Not yet a member? <a href="http://localhost/ocr/cyber-tech/login.php">Login</a>
    </p>
    <p>
      Not yet a member? <a href="http://localhost/ocr/cyber-tech/register.php">Sign up</a>
    </p>
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
