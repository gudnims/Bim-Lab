<?php

session_start();

if(isset($_SESSION['user_session'])!="")
{
	header("Location: home.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link href="../../../Users/gudni/Desktop/Ajax-Login-Script-PHP/Ajax-Login-Script-PHP/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="../../../Users/gudni/Desktop/Ajax-Login-Script-PHP/Ajax-Login-Script-PHP/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="../../../Users/gudni/Desktop/Ajax-Login-Script-PHP/Ajax-Login-Script-PHP/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="../../../Users/gudni/Desktop/Ajax-Login-Script-PHP/Ajax-Login-Script-PHP/validation.min.js"></script>
<link href="../../../Users/gudni/Desktop/Ajax-Login-Script-PHP/Ajax-Login-Script-PHP/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="../../../Users/gudni/Desktop/Ajax-Login-Script-PHP/Ajax-Login-Script-PHP/script.js"></script>

</head>

<body>
    
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="login-form">
      
        <h2 class="form-signin-heading">Log In to WebApp.</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
        </div>
       
     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
        </div>  
      
      </form>

    </div>
    
</div>
    
<script src="../../../Users/gudni/Desktop/Ajax-Login-Script-PHP/Ajax-Login-Script-PHP/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>