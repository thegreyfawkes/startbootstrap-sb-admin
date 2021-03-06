<?php
	require_once 'class/user.php';
	require_once 'config.php';
//	require_once 'login.php'

//	$user->loginhead();
//	$user->loginbody();
//	$user->loginForm();
//	$user->activationForm();
//	$user->landingMiddle();
//	$user->registerForm();
//  $user->landingFooter();
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core from Secure Login PHP Tutorial -->
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="username" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="password1" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <!-- <a class="btn btn-primary btn-block"id="login-submit" href="index.html">Login</a> 
          <a class="btn btn-primary btn-block" href="login.php" id="login-form-link">Login</a> -->
          <input type="button" name="login-submit" id="login-submit" class="btn btn-primary btn-block" value="Login">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register_main.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- LOGIN javascript -->
  <script type="text/javascript">
  	$(function() {
  		$("#login-submit").click(function(){
  			if($("#username").val() != "" && $("#password1").val() != "" && validateEmail($("#username").val())){
  				$.ajax({
  				  method: "POST",
  				  url: "<?=loginfile?>",
  				  data: { username: $("#username").val(), password: $("#password1").val() }
  				}).done(function( msg ) {
  				    if(msg !== ""){
  				    	alert(msg);
  				    }else{
  				    	window.location = "<?=userfile?>";
  				    }
  				});
  			}else{
  				alert("Please fill all fields with valid data!");
  			}
  		});
  	});
  	
  	function validateEmail($email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,})?$/;
  	return emailReg.test( $email );
}
  </script>

</body>

</html>
