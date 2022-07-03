<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/login.css" type="text/css">

</head>

<body class="contact_me">
	<div class="login-box">
		<h2>ارتباط با ما</h2>


		<form >
			<div class="user-box">
				<label for="">نام</label>
				<input type="text" placeholder="نام">
			</div>


			<div class="user-box">
			<label for="">ایمیل</label>

				<input type="email" placeholder="ایمیل">
			</div>

			<div class="user-box">


				<textarea required name="" id="" cols="30" rows="10"></textarea>
			</div>


			<button type="submit" name="submit" onclick="alert('پیام شما ثبت شد و از طریق ایمیل به شما پاسخ خواهیم داد');">ثبت</button>
			<p><a href="<?php echo base_url()?>/index.php/welcome">بازگشت </a></p>

		</form>

		
	</div>

</body>

</html>