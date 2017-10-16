<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/css/rental.css"; ?>" rel="stylesheet">
    </head>
    <title>RENTAL | HOME</title>
    <body class="home">
        <nav></nav>
        <br><br><jumbotron><h1 class="text-center">Selamat <strong>Datang</strong></h1></jumbotron><br><br>
        <div class="row">
            <div class="container">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo form_open_multipart('user/login/'); ?>
                            
                    <br><p class="text-center"><a href="index.php/user/logout"><span>LogOut</span></a></p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>