<?php include ("views/base/header.php"); ?>
<body class="hold-transition skin-green-light fixed">
    <div class="wrapper">
    <?php include ("views/base/navbar.php"); ?>
    <?php include ("views/base/sidebar.php"); ?>

        <div class="content-wrapper">
            <section class="content" > 
                <div class="row">

<?php
foreach ($courses as $course) {
    include ("views/course/courses.php");
}
?>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong> منصة قيم&copy; 2016 <a href="#">مبادرة ممولة من قبل برنامج ديموقراطي</a> ، </strong>احد برامج صندوق الملك عبدالثاني للنتمية
        </footer>

<?php include_once ("views/base/footer.php");;