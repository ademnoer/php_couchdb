<form action="<?php echo LOGIN_URL ?>" method="POST">
    <div class="form-group has-feedback">
        <input required name="username" type="text" class="form-control" placeholder="<?php echo REGISTER_FORM_USERNAME ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input required name="password" type="password" class="form-control" placeholder="<?php echo REGISTER_FORM_PASSWORD ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input required name="repassword" type="password" class="form-control" placeholder="<?php echo REGISTER_FORM_REPASSWORD ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input required name="fullname" type="text" class="form-control" placeholder="<?php echo REGISTER_FORM_FULLNAME ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <input name="capcha" type="hidden" value="<?php echo $_SESSION["capcha"] ?>">
    <input name="register" type="hidden" value="register">
    <div class="row">
        <div class="col-xs-12">
            <button type="submit" value="register" class="btn btn-success btn-block btn-flat"><?php echo REGISTER_FORM_BUTTON ?></button>
            <br><p><?php echo REGISTER_FORM_AGREEMENT ?></p>
        </div>
    </div>
</form>