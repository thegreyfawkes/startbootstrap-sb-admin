<?php
	require_once 'class/user.php';
	require_once 'config.php';
?>
<!DOCTYPE html>
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
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="fname" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="lname" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="password2" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="confirm-password" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <!-- <a class="btn btn-primary btn-block" href="login.html">Register</a> -->
          <input type="button" name="register-submit" id="register-submit" class="btn btn-primary btn-block" value="Register">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="landing.php">Login Page</a>
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
  <!-- REGISTER javascript -->
  <script type="text/javascript">
	$(function() {
		$("#register-submit").click(function(){
			if($("#fname").val() != "" && $("#lname").val() != "" && $("#email").val() != "" && $("#password2").val() != "" && validateEmail($("#email").val())){
				if($("#password2").val() === $("#confirm-password").val()){
					$.ajax({
					  method: "POST",
					  url: "<?=registerfile?>",
					  data: { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val(), password: $("#password2").val() }
					}).done(function( msg ) {
					   	alert(msg);
					});
				}else{
					alert("Passwords do not match!");
				}
				
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
