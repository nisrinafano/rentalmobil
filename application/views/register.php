<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/css/rental.css"; ?>" rel="stylesheet">
    </head>
    <title>RENTAL | Register</title>
    <body class="login">
        <nav></nav>
        <br><br><jumbotron><h1 class="text-center"><strong>REG</strong>ISTER</h1></jumbotron><br><br>
        <div class="row">
            <div class="container">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php echo form_open_multipart('User/createUser/'); ?>
                            <form method="POST">
                                <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                        <input  name="nama" type="text" placeholder="Nama" class="form-control input-md" required> 
                                </div>
                                <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                        <input  name="email" type="text" placeholder="Email" class="form-control input-md" required>
                                </div>
                                
                                <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Password</label></h6>
                                    <div class="col-md-9">-->
                                        <input  name="password" type="password" placeholder="Password" class="form-control input-md" required>
                                    
                                </div>

                                 <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                        <input  name="alamat" type="text" placeholder="Alamat" class="form-control input-md" required>
                                </div>

                                 <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                        <input  name="pekerjaan" type="text" placeholder="Pekerjaan" class="form-control input-md" required>
                                </div>

                                <br>
                                <h6 style="color: red"><?php echo $this->session->flashdata('error');?></h6>
                                <br>

                                <input type="hidden" name="is_submit" value="1" />
                                <p class="text-center"><input type="submit" name="submit" value="REGISTER" id="btnLogin"/></p>
                                <?php echo form_close(); ?>
                            </form>
                    <br><p class="text-center">Sudah memiliki akun? <a href="<?php echo base_url()."index.php/User/loginview";?>"><span>Login sekarang</span></a></p>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>