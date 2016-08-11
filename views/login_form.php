<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>منصة قيم</title>
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="static/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLE CSS -->
        <link href="static/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLE CSS -->
        <link href="static/css/style.css" rel="stylesheet" />
        <!-- GOOGLE FONT CSS -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    </head>
    <body>
        <section class="sec-menu" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="menu-open-icon">  <i class="fa fa-question-circle pull-left fa-2x b-clr"></i> </span>  <i class="pull-right"> مرحبا بك :) </i>   
                    </div>
                </div>
            </div>
        </section>
        <!--MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">
                <div class="row pad-botm">
                    <div class="col-md-12">
                        <h4 class="header-line">تسجيل الدخول</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                مستخدم جديد
                            </div>
                            <div class="panel-body">
                                <form role="form">
                                    <div class="form-group">
                                        <label>اسم المستخدم (باللغة الانجليزية)</label>
                                        <p class="help-block">سوف تستخدم هذا الاسم للدخول الى حسابك فقط</p>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label>كلمة السر (يجب ان تكون 4 احرف على الاقل)</label>
                                        <input class="form-control" type="password" />
                                    </div>
                                    <div class="form-group">
                                        <label>قم باعادة كتابة كلمة السر مرة أخرى</label>
                                        <input class="form-control" type="password" />
                                    </div>
                                    <div class="form-group">
                                        <label>الاسم الكامل: (باللغة العربية)</label>
                                        <input class="form-control" type="text" />
                                    </div>                                        
                                    <input name="capcha" value="<?php echo $_SESSION['capcha']; ?>" style="visibility: hidden"/>
                                    <button type="submit" class="btn btn-info" value="register">تسجيل</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                دخول
                            </div>
                            <div class="panel-body">
                                <form role="form" action="<?php echo LOGIN_URL ?>" method="post">
                                    <div class="form-group">
                                        <label>ادخل اسم المستخدم (باللغة الانجليزية)</label>
                                        <input name="username" class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <label>كلمة السر</label>
                                        <input class="form-control" type="password" />
                                    </div>
                                    <button type="submit" class="btn btn-danger" value="login">دخول</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.ROW-->
            </div>
        </div>
        <!-- CONTENT-WRAPPER SECTION END-->
        <section class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        &copy; 2014 Yourdomain.com |<a href="http://www.binarytheme.com/" target="_blank"  > Designed by : binarytheme.com</a> 
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER SECTION END-->
        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY  -->
        <script src="static/js/jquery-1.11.1.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="static/js/bootstrap.js"></script>
        <!-- CUSTOM SCRIPTS  -->
        <script src="static/js/custom.js"></script>
    </body>
</html>
