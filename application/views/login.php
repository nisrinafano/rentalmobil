<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/css/rental.css"; ?>" rel="stylesheet">
    </head>
    <body class="login">
        <nav></nav>
        <br><br><jumbotron><h1 class="text-center">SIGN <strong>IN</strong></h1></jumbotron><br><br>
        <div class="row">
            <div class="container">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo form_open_multipart('User/login/'); ?>
                            <form method="POST">
                                <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                        <input  name="email" type="text" placeholder="email..." class="form-control input-md" >
                                    
                                </div>
                                
                                <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Password</label></h6>
                                    <div class="col-md-9">-->
                                        <input  name="password" type="password" placeholder="password..." class="form-control input-md" >
                                    
                                </div><br><br>
                                <h6 style="color: red"><?php echo $this->session->flashdata('error');?></h6>
                                <br>

                                <input type="hidden" name="is_submit" value="1" />
                                <p class="text-center"><input type="submit" name="submit" value="LOGIN" id="btnLogin"/></p>
                                <?php echo form_close(); ?>
                            </form>
                    <br><p class="text-center">Belum memiliki akun? <a href="<?php echo base_url()."index.php/User/regview";?>"><span>Buat sekarang</span></a></p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>