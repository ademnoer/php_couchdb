<?php
echo '  <div class="col-md-4">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">' . $course["title"] . '</h3>
                </div>
                <div class="box-body">
                    <img class="img-responsive" src="' . STATIC_URL . $course["thumb"] . '" alt="Photo">
                </div>
                <div class="box-footer">
                    <a href="' . COURSE_URL . $course["id"] . '" type="button" class="btn btn-success btn-flat">دراسة المسار</a>
                </div>
            </div>
        </div>';
