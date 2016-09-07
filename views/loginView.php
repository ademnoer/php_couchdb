<?php include ("views/base/header.php"); ?>
<body class="hold-transition login-page"><br><br>
    <div class="row">

        <div class="col-md-4 col-md-offset-2">
            <div class="login-box">
                <div class="login-logo">
                    <p><b>Admin</b>LTE</p>
                </div>
                <div class="login-box-body">
                    <p class="login-box-msg"><?php echo LOGIN_MASSEGE ?></p>
                    <?php
                    if (isset($login)) {
                        echo '<div class="login-box-msg"><p style="color: red;" >' . $login->error . '</p></div>';
                    }
                    ?>
                    <?php include_once ("views/login/login_form.php"); ?>
                </div>
            </div>        
        </div>


        <div class="col-md-4">
            <div class="login-box">
                <div class="login-logo">
                    <p><b>Admin</b>LTE</p>
                </div>
                <div class="login-box-body">
                    <p class="login-box-msg"><?php echo REGISTER_MASSEGE ?></p>
                    <?php
                    if (isset($register)) {
                        echo '<div class="login-box-msg"><p style="color: red;" >' . $register->error . '</p></div>';
                    }
                    ?>
                    <?php include_once ("views/login/resigter_form.php"); ?>
                </div>
            </div>        
        </div>




    </div>

<?php include ("views/base/footer.php"); ?>