<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
    .show-info-page {
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: slategray;
    }

    .card {
        margin-top: 10%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 250px;
        flex-direction: column;
        background-color: white;
    display: flex;
    justify-content: center;
    text-align: center;
    padding: 2rem;

    }

    .card h4 {
        text-align: center;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
        padding: 2px 16px;
    }
</style>
</head>

<body class="show-info-page">

    <div class="card">
        <img src="<?php echo base_url(); ?>assets/images/leaf.jpg" alt="Avatar" style="width:250px; height:250px" />


            کاربر جدید خوش آمدید 
    </div>
        <p><a href="<?php echo base_url()?>/index.php/welcome">بازگشت </a></p>

</body>

</html>