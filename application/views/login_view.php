<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/login.css" type="text/css">

</head>

<body>
    <div class="login-box">
        <h2>ورود</h2>
        <form action="<?php echo site_url('Login/auth');?>" method="POST">
            <div class="user-box">
                <input type="username" name="username" required >
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>


            <button type="submit" name="submit">submit</button>
        </form>
    </div>
    <!-- partial -->

</body>

</html>