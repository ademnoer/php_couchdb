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
