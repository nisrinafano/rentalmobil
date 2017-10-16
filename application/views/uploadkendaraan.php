<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/bootstrap/css/bootstrap.css"; ?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/vendor/css/rental.css"; ?>" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-default" style="background-color:black">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Mobil Saya</a></li>
                <li><a href="#">Riwayat</a></li>
            </ul>
        </nav>
        <jumbotron>
            <h1 class="text-center"><em>Upload Mobil</em></h1>
        </jumbotron>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 text-right">
                        <br>
                        <h4><em>NAMA :</em></h4><br>
                        <h4><em>TAHUN :</em></h4><br>
                        <h4><em>NOMOR POLISI :</em></h4><br>
                        <h4><em>HARGA SEWA :</em></h4><br>
                        <h4><em>KET :</em></h4><br>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <?php echo form_open_multipart('User/createUser/'); ?>
                        <form method="POST">
                            <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                    <input  name="nama" type="text" class="form-control input-md" ><br>
                            </div>
                            <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                    <input  name="tahun" type="text" class="form-control input-md" ><br>
                            </div> 
                            <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                    <input  name="nopol" type="text" class="form-control input-md" ><br>
                            </div>
                            <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                    <input  name="harga" type="text" class="form-control input-md" ><br>
                            </div>
                            <div class="form-group">
                                    <!--<h6><label class="col-md-3 control-label" for="textinput">Email</label></h6>
                                    <div class="col-md-9">-->
                                <textarea  name="ket" type="textarea" class="form-control input-md" ></textarea>
                            </div>
                            <input type="hidden" name="is_submit" value="1" />
                            <p class="text-center"><input type="submit" name="submit" value="Apply" id="btnUpload"/></p>
                        <?php echo form_close(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </body>
</html>