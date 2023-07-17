<?php
    session_start();
    error_reporting(0);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lenslink</title>
	<style type="text/css">
.auto-style1 {
	font-size: small;
}
</style>
</head>

	<link href="Data/csx.css" rel="stylesheet" type="text/css">


<body>
    <div class="container" style="left: 0px; top: 0px; height: 660px; width: 438px">
  <div class="brand-logo">
	  <img alt="" height="90" src="Data/Transperent.png" width="90"></div>
        <div class="brand-title">Create an account to continue</div>

        <div class="inputs">
            <form action="">
                <label style="height: 20px">NAME</label>
                <input type="text" placeholder="Name" required style="height: 40px">
                <label style="height: 20px">EMAIL</label>
                <input type="email" placeholder="Email address" required style="height: 40px">
                <label style="height: 20px">NUMBER</label>
               <input type="text" placeholder="Phone number" required style="height: 40px">
               <label style="height: 20px">PASSWORD</label>
               <input type="password" placeholder="Password" required style="height: 40px">
               <label style="height: 20px">CONFIRM PASSWORD</label>
               <input type="password" placeholder="Password" required style="height: 40px">
               <button type="submit">CREATE ACCOUNT</button>
               </div>
            </form>
            <div class="texts">
 <a href="" style="right: 90px; bottom: 10px" class="auto-style1">Already Have an Account? 
				Login&nbsp; Here</a></div>
    </div>
    
</body>
</html>
