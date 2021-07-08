<?php

require 'db_connect.php';
if (isset($_POST['submit'])) {
	$view = $_POST['view'];
	$name = $_POST['name'];
	$comments = $_POST['comments'];
	$email = $_POST['email'];
	$num = $_POST['num'];
  $username=$_SESSION['username'];
	$sql = "INSERT INTO `feedbacks`(`no`, `name`, `email`, `phone`, `feedback`, `suggestions`) 
VALUES ('','$name','$email','$num','$view','$comments')";
	$query = mysqli_query($conn, $sql);
	if($query){
		$to = "$email";
		$subject = "From bookstore";
		
		$message = "
		<html>
		<head>
		<title></title>
		</head>
		<body>
		<p></p>
		<table>
		<tr>
		<th>your feedback been submitted,it is valuable to us</th>
		
		</tr>
		<tr>
		<td>thankyou</td>
		
		</tr>
		</table>
		</body>
		</html>
		";
		
		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		 $headers .= 'From: <webmaster@example.com>' . "\r\n";
		 if (!mail($to, $subject, $message, $headers))
		 $showErrorsever="Sever is not responding plz try again later";
		header("Location: home.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/feedback.css">
	<title>Document</title>
	<style>
		* {
			padding: 0;
			margin: 0;
		}

		body {
			background-image: url("css/bg2.jpg");
			background-size: cover;
		}

		.container {
			display: flex;
			justify-content: center;
			flex-direction: column;
			align-items: center;

		}

		.form-box {
			width: 600px;
			height: 700px;
			position: relative;
			margin: 2% auto;
			background-color: rgb(0, 0, 0, 0.7);
			border-radius: 9px;
			padding: 5px;
		}

		.input {
			display: block;
			width: 550px;
			height: 35px;
			margin: 10px;
			font-size: 20px;
			border-bottom: 2px solid black;
			background: white;
			color: black;
			font-weight: 150;
			border-radius: 9px;
		}
		textarea{
			display: block;
			width: 550px;
			height: 80px;
			margin: 10px;
			font-size: 20px;
			border-bottom: 2px solid black;
			background: white;
			color: black;
			font-weight: 150;
			border-radius: 9px;
			
		}
		.btn {
			width: 200px;
			height: 40px;
			font-size: 21px;
			background-color: rgba(26, 141, 232, 0.633);
			border: none;
			border-radius: 20px;
			color: white;
			margin-top: 0px;
			letter-spacing: 0.1rem;
		}

		.btn:hover {
			background-color: rgb(18, 144, 194);
			color: snow;

		}

		h1 {
			font-family: 'Roboto Mono', monospace;
			font-weight: 800;
			margin-bottom: 10px;
			letter-spacing: 0.2rem;
			font-size: 30px;
			color: black;
			background-color: blanchedalmond;
			
			padding: 5px 5px;
			border-radius: 10px;
		}
		h3,h2{
			font-family: 'Roboto Mono', monospace;
			font-weight: 400;
			margin-bottom: 20px;
			margin-top: 10px;
			font-size: 20px;
			color: white;
			text-align: center;
			
		}
		label {
			font-family: 'Roboto Mono', monospace;
			font-weight: 500;
			margin-bottom: 5px;
			font-size: 25px;
			color: white;
		}
		.agile_info_select{
			margin-left: 25px;
			margin-top: 20px;
			padding: 5px 5px;
			width: 160px;	
		}
		ul{
			list-style-type: none;
		}
	</style>
</head>

<body>
	
	<div>
		<div class="container form-box"><h1>Feedback Form</h1>
			<h3>Please help us to serve you better by taking a couple of minutes. </h3>
			<form action="feedback.php" method="post">
				<h2>How satisfied were you with our Service?</h2>
				<ul class="agile_info_select">
					<li><input type="radio" name="view" value="excellent" id="excellent" required>
						<label for="excellent">Excellent</label>
						<div></div>
					</li>
					<li><input type="radio" name="view" value="good" id="good">
						<label for="good"> Good</label>
						<div></div>
					</li>
					<li><input type="radio" name="view" value="neutral" id="neutral">
						<label for="neutral">Neutral</label>
						<div></div>
					</li>
					<li><input type="radio" name="view" value="poor" id="poor">
						<label for="poor">Poor</label>
						<div></div>
					</li>
				</ul>
				<h2>If you have specific feedback, please write to us...</h2>
				<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required="" ></textarea>
				<input type="text" placeholder="Your Name" name="name" class="input"/>
				<input type="email" placeholder="Your Email" name="email" class="input" />
				<input type="text" placeholder="Your Number" name="num"  class="input"/><br>
				<center><input type="submit" name="submit" value="submit Feedback" class="btn" /></center>
			</form>
		</div>
	</div>
</body>

</html>