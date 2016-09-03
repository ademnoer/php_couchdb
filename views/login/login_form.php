<form action="<?php echo LOGIN_URL ?>" method="POST">
    <div class="form-group has-feedback">
        <input required name="username" type="text" class="form-control" placeholder="<?php echo LOGIN_FORM_USERNAME ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input required name="password" type="password" class="form-control" placeholder="<?php echo LOGIN_FORM_PASSWORD ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <input name="capcha" type="hidden" value="<?php echo $_SESSION["capcha"] ?>">
    <input name="submit" type="hidden" value="login">
    <div class="row">
        <div class="col-xs-12">
            <button type="submit" value="login" class="btn btn-primary btn-block btn-flat"><?php echo LOGIN_FORM_BUTTON ?></button>
        </div>
        <!-- /.col -->
    </div>
</form>