<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/register.css" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="register-page">


    <form method="POST" action="<?php echo base_url() ?>index.php/welcome/show_registered_info" enctype="multipart/form-data" class="register-form">


        <h1>ثبت نام</h1>

        <div>
            <label for="first-name"><b>نام</b></label>
            <input type="text" placeholder="Enter Name" name="first-name" id="first-name" required value="<?php echo set_value('first-name') ?>">
        </div>

        <div>
            <label for="last-name"><b> نام خانوادگی</b></label>
            <input type="text" placeholder="Enter Last Name" name="last-name" id="last-name" required value="<?php echo set_value('last-name') ?>">
        </div>
        <div>
            <label for="email"><b>ایمیل</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required value="<?php echo set_value('email') ?>">
        </div>

        <hr>

        <button type="submit" class="registerbtn">ارسال</button>

    </form>

</body>

</html>