<!-- Vue header incluse -->
<?php $this->load->view('partials/header'); ?>



<div id="content-wrapper">




    <form action="<?php echo site_url('welcome/login'); ?>" method="post" class="panel form-horizontal" >
        <div class="panel-heading">
            <span class="panel-title"><span class="fa fa-power-off"></span> Connexion</span>
            <?php if(isset($error)) { ?>
                <div class="alert alert-warning alert-dark"><?php echo $error; ?></div>
            <?php } ?>
        </div>
        <div class="panel-body">
            <div class="row form-group">
                <label class="col-sm-4 col-md-2 control-label">Login ou Email</label>
                <div class="col-sm-3 col-md-3">
                    <input type="text" name="login" pattern="^.{3,}$" class="form-control" placeholder="Login" required value="<?php echo set_value('login'); ?>">
                    <?php echo form_error('login', '<div class="alert alert-dark alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>', '</div>'); ?>
                </div>

            </div>


            <div class="row form-group">
                <label class="col-sm-4 col-md-2 control-label">Mot de passe</label>
                <div class="col-sm-3 col-md-3">
                    <input type="password" name="password" pattern="^.{6,}$" class="form-control" placeholder="Votre mot de passe" required>
                    <?php echo form_error('password', '<div class="alert alert-dark alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>', '</div>'); ?>
                </div>

            </div>


        </div>
        <div class="panel-footer text-right">
            <button type="submit" class="btn btn-primary">Connexion</button>
            <a href="<?php echo $fburl; ?>">
                <img class="img-responsive" src="http://www.kilnandco.com/gallery/var/albums/facebook-login-button.png?m=1375582078" />
            </a>
        </div>
    </form>


</div>




<!-- Vue footer incluse -->
<?php $this->load->view('partials/footer'); ?>