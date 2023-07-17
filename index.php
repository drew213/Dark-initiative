<?php
    session_start();
    error_reporting(0);
    
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LensLink</title>
  <link rel="shortcut icon" href="Data/2(circle).png">
  <!-- Tell the browser to be responsive to screen width -->
  <!-- Developed by Naseeb Bajracharya -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="Data/csx.css" rel="stylesheet" type="text/css">
</head>
<form>
<body class="hold-transition login-page" style="margin-top: 30px">
  <div class="container">
  <div class="brand-logo">
	  <img alt="" height="90" src="Data/Transperent.png" width="90"></div>
  <div class="brand-title">Welcome back</div>
  <div class="inputs">
    <label>EMAIL</label>
    <input type="email" placeholder="example@test.com" />
    <label>PASSWORD</label>
    <input type="password" placeholder="Min 6 charaters long" id="password" /></div>
    
    <input type="checkbox" onclick="myFunction()">Show Password</div>


 <a href="" style="right: 78px; bottom: 12px">Don't Have an Account? Sign up Here</a>
    <button type="submit">LOGIN</button>
</div>
</form>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
<?php // include('Data/footer.php');?>
</html>
