<hr>

<div class="box-spct">
    <ul>
        <li><a href="index.php?act=home">Trang chủ </a></li>
        <li> > </li>
        <li> Đăng nhập</li>
    </ul>

    
</div>
    <div class="box-login" style="text-align:center; color:red; font-weight:500;">
    <?php
        if(isset($thongbao)){
            echo $thongbao;
        }
    ?>
    </div>
  
<div class="box-login">
    <form action="index.php?act=dangnhap" method="post" id="login-form">
        <div class="form-group">
            <label for="username">Tên đăng nhập *</label><br>
            <input type="text" id="username" name="username"  placeholder="Tên đăng nhập">
            <div style="color: red;font-weight:500"><?php echo $errors['username'] ?? '' ?></div>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu *</label><br>
            <input type="password" id="password" name="password"  placeholder="Mật khẩu">
            <div style="color: red;font-weight:500"><?php echo $errors['password'] ?? '' ?></div>
        </div>
        <div class="form-group dangnhap">
            <a href="/" class="forgot-password">Quên mật khẩu của bạn?</a>
            <button type="submit" class="btn">Đăng nhập</button>
            <!-- <a href="/" class="forgot-password">Quên mật khẩu của bạn?</a> -->
        </div>
       

        <hr>

        <div class="form-group" style="text-align:center; margin-top: 12px">
            <span style="color:gray" >Bạn chưa có tài khoản?</span>
            <span><a style="color:#ff6a28" href="index.php?act=dangky">Đăng ký</a></span>
        </div>

    </form>

    
</div>

<hr style="max-width:1100px; margin:0 auto; margin-top:35px;margin-bottom:35px;">
