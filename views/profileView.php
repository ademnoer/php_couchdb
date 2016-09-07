<?php include ("views/base/header.php"); ?>
<body class="hold-transition skin-green-light fixed">
    <div class="wrapper">
        <?php include ("views/base/navbar.php"); ?>
        <?php include ("views/base/sidebar.php"); ?>

        <div class="content-wrapper">
            <section class="content" > 
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo PROFILE_PAGE_TITLE; ?></h3>
                            </div>
                            <div class="box-body">
                                <img class="img-responsive" src="' . STATIC_URL . $course["thumb"] . '" alt="Photo">
                            </div>
                            <div class="box-footer">
                                <a href="#" type="button" class="btn btn-success btn-flat"><?php echo PROFILE_PAGE_SUBMIT_BUTTON; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong> منصة قيم&copy; 2016 <a href="#">مبادرة ممولة من قبل برنامج ديموقراطي</a> ، </strong>احد برامج صندوق الملك عبدالثاني للنتمية
        </footer>

        <?php
        include_once ("views/base/footer.php");
        ;
        