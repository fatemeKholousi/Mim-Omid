<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
    .show-info-page{
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color:slategray;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 250px;
        flex-direction: column;
        background-color: white;
        
    }
    .card h4{
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
<h1>
                :اطلاعات ثبت شده 
            </h1>
    <div class="card">
    <img src="<?php echo base_url(); ?>assets/images/leaf.jpg" alt="Avatar" style="width:250px; height:250px" />
      
        <div class="container">
           
            <h4><b><?php
                    print_r($_POST['first-name']);?> </b>
                  <b> <?php print_r($_POST['last-name']); ?></b> </h4>
            <p><?php
                print_r($_POST['email']);
                ?></p>
        </div>
    </div>
    <p> </p>
    <?php
    ?>

</body>

</html>