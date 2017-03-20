<!DOCTYPE html>
<?php
	function aboutUs($people) {
		foreach($people as $k => $v) {
			echo "<h3 class='stuff'>" . $k . "</h3><br /> " . $v ."<br />";
		}
	}; 
	$company = array(
		"Phone"		=> "905-123-4567",
		"Location"	=> "Address here"
	);

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$to = 'cheryl.almojuela@mail.utoronto.ca';
	
	$body = "$message";
	
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "From: " . $name . " <" . $email . ">\r\n";
		// PHP.net is a wonderful tool. It helped me understand how to make this work
		// so I wouldn't need to have the email say it came from 'Nobody'
	
	if( $_POST['submit']) {
		if( mail ($to, $subject, $body, $headers)) {
			echo '<p>Your message has been sent!</p>';
		} else {
			echo '<p>Something went wrong. Go back and try again</p>';
		}
	}
	
?>
<html>
<head>
	<title>Contact Form</title>
	<style>
		body { width: 100%; margin: 0; }
		label {
			display: block;
			padding-top: 20px;
			letter-spacing: 2px;
		}
		.left {
			background: green;
			float: left;
			margin: 0 auto;
			padding-top: 20px;
			padding-bottom: 50px;
			padding: 1%;
			width: 38%;
		}
		.right {
			background: pink;
			float: right;
			margin: 0 auto;
			padding: 0 1%;
			width: 58%;
		}
		.stuff {
			letter-spacing: 2px;
		}
	</style>
</head>
<body>
	<header></header>
	<section class="left">
		<?php 
		aboutUs($company);
		?>
	</section>
	<section class="right">
		<form method="post" action="contact.php">
			<label>Name</label>
			<input name="name" placeholder="Your Name">
			<label>Email</label>
			<input name="email" type="email"  placeholder="E-mail">
			<label>Subject</label>
			<select name="subject">
				<option value="General Inquiry">General Inquiry</option>
				<option value="Photography">Photography</option>
			</select>
			<label>Message</label>
			<input name="message" placeholder="Message">
			<input id="submit" name="submit" type="submit" value="Submit">
		</form>
	</section>
	<footer></footer>
</body>
</html>