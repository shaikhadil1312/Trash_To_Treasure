<?php
if(isset($_POST['getotp'])){
    $email = $_POST['user_email'];
    $otp = $_POST['user_otp'];

    $to=$email;
    $from="shubhamkumbhar047@gmail.com";
    $fromName="Shubham Kumbhar";
    $subject="Otp verification";
    $message="Your otp is ".$otp;
    $header='From: '.$fromName.'<'.$from.'>';
	mail($to,$subject,$message,$header);
    // if(mail($to,$subject,$message,$header)){
    //     $msg = "Successful";
    //     echo "<script>alert('Email sent');</script>";
	// 	echo $message;
    // }
}
?>


<!DOCTYPE html>
<html>

<head>
	<title>Submit Otp</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="login.css">
	<link rel="icon" href="leave1.jpeg">
	<script type="text/javascript" src="https://smtpjs.com/v3/smtp.js"></script>
</head>



<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="verifyotp.php">
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">

						<input type="number" class="input" id="user_email" name="user_entered_otp" placeholder="Enter Otp">
					</div>
				</div>
                <div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">

						<input type="hidden" class="input" id="otp_inp" name="user_otp" placeholder="OTP" value="<?php echo $otp;?>">
					</div>
                    
				</div>
				<!-- <div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div> -->
					<!-- <div class="div">

						<input type="text" class="input" name="user_pass_login" placeholder="Password">
					</div> -->
				<!-- </div> -->
				<!-- <a href="#">Forgot Password?</a> -->
				<!-- <button class="btn" id="getotp" onclick="otp_verify1()">GET OTP</button>
                <button class="btn" id="verifyotp">VERIFY OTP</button> -->
				<!-- <a href="signup.php"><input type="button" class="btn" value="Sign Up" ></a> -->
				<!-- <a href="company_signup.php"><input type="button" class="btn" value="Company Sign Up" ></a> -->
				<!-- <a href="signup.html">Sign Up</a> -->
				<input type="submit" class="btn" name="getotp1" value="Verify">

			</form>
		</div>
	</div>
	<!-- <script  src="otp_verify.js"></script> -->
</body>

</html>

