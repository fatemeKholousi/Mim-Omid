<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/register.css" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="register-page">


    <form method="POST" action="<?= base_url('index.php/register/registerNow') ?>" enctype="multipart/form-data" class="register-form">

        <h1>ثبت نام</h1>

        <div>
            <label for="username"><b>نام کاربری</b></label>
            <input type="text" placeholder="User Name" name="username" id="username" required value="<?php echo set_value('username') ?>">
        </div>

        <div>
            <label for="password"><b> پسورد </b></label>
            <input type="password" placeholder="Password" name="password" id="password" required value="<?php echo set_value('password') ?>">
        </div>
        <div>
            <label for="email"><b>ایمیل</b></label>
            <input minlength="6" pattern="^[^ ]+@[^ ]+\.[a-z]{2,6}$" type="email" placeholder="Enter Email" name="email" id="email" required value="<?php echo set_value('email') ?>">
        </div>

        <div>
            <label for="level"><b>سطح دسترسی </b></label>

            <select name="level" id="level" required>
                <option value="select" disabled>انتخاب کنید </option>

                <!-- same as staff -->
                <option value="3">نقد کننده</option>
                <!-- same as project leader -->
                <option value="2">تحلیلگر </option>
            </select>
        </div>

        <hr>

        <button type="submit" class="registerbtn">ارسال</button>
        <?php
        if ($this->session->flashdata('seccess')) { ?>
            <p><?= $this->session->flashdata('success') ?></p>
            }
        <?php } ?>
    </form>

</body>

</html>