<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="emailpage.css">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
		<title>Niyama Email Form</title>
	</head>
	
	<body class="main">
		
		<main>
			<form class="contact-form" action="contactformfixed.php" method="post">
				<h1>Enter to win a silicone yolk!</h1>
				<p>Enter your name and email to be entered to win a silicone buddy! 
				If you win you will be asked to provide your address so we can mail you your prize.</p>
				
				<input type="text" name="name" placeholder="Your Full Name" size="70%" required>
				<br><br>
				
				
				<input type="email" name="mail" placeholder="Your Email" size="70%" required>
				
				<br><br>
				
				<button id="specialbutton" type="submit" name="submit">Enter</button>
				
			
			</form>
			
			<div class="bottom">
				<a href="termspage.php">Terms and Conditions</a>
			</div>
			
		</main>
	
	</body>
	
</html>