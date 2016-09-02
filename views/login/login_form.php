<form role="form" action="<?php echo LOGIN_URL ?>" method="post">
    <div class="form-group">
        <label>ادخل اسم المستخدم (باللغة الانجليزية)</label>
        <input name="username" class="form-control" type="text" />
    </div>
    <div class="form-group">
        <label>كلمة السر</label>
        <input name="password" class="form-control" type="password" />
    </div>
    <input name="submit" value="login" style="visibility: hidden"/>
    <input name="capcha" value="<?php echo $_SESSION['capcha']; ?>" style="visibility: hidden"/>
    <button type="submit" class="btn btn-danger" value="login">دخول</button>
</form>
