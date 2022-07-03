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
        <form action="<?php echo site_url('Login/auth'); ?>" method="POST">
            <div class="user-box">
            <label>نام کاربری</label>

                <input type="username" name="username" required>
            </div>
            <div class="user-box">
            <label>رمز عبور</label>

                <input type="password" name="password" required>
            </div>
            <button type="submit" style="margin-top:0" name="submit">ارسال</button>
            <p><a href="<?php echo base_url()?>/index.php/welcome">بازگشت </a></p>

        </form>
    </div>
    <!-- partial -->

</body>

</html>