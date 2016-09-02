<?php include ("views/base/header.php"); ?>
<?php include ("views/base/sidebar.php"); ?>


<!--MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">تسجيل الدخول</h4>
            </div>
            <?php
            if (isset($errorMassage)) {
                echo '<div class="col-md-12"><h4 class="header-line">' . $errorMassage . '</h4></div>';
            }
            ?>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        مستخدم جديد
                    </div>
                    <div class="panel-body">
                        <?php include ('views/login/resigter_form.php'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        دخول
                    </div>
                    <div class="panel-body">
                        <?php include ('views/login/login_form.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/.ROW-->
    </div>
</div>
<?php include ('views/base/footer.php'); ?>