<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://aliniex.com/favicon.png" type="image/x-icon">
    <title>Aliniex</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="../themify-icons/themify-icons.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="nav">
                <a href="https://aliniex.com/" class="logo">
                    <img src="./img/logo/logo.svg" title="Trang chủ" class="logo">
                </a>
                <div class="user">
                    <a href="" class="login">
                        <label for="login">Đăng nhập</label>
                    </a>
                    <a href="" class="sign-up">
                        <label for="sign-up">Tạo tài khoản</label>
                    </a>
                </div>
            </div>
        </div>

        <?php
        $email = $password = '';
        $emailErr = $passwordErr = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['email'])) {
                $emailErr = 'Email không được bỏ trống.';
            } else {
                if (strpos($_POST['email'], '@gmail.com') == false) {
                    $emailErr = 'Email không hợp lệ';
                } else {
                    $email = $_POST['email'];
                }
            }

            if (empty($_POST['password'])) {
                $passwordErr = 'Mật khẩu không được bỏ trống.';
            } else {
                $regexp = "/^[A-Z]/";
                if (strlen($_POST['password']) < 8 || preg_match($regexp, $_POST['password']) == false) {
                    $passwordErr = 'Mật khẩu ít nhất 8 kí tự và phải bắt dầu bằng chữ in hoa';
                } else {
                    $password = $_POST['password'];
                }
            }
        }
        ?>

        <div class="body">
            <div class="content">
                <div class="title">Đăng nhập vào Aliniex</div>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form">
                    <div class="form-login">
                        <input type="text" placeholder=" " class="email" name="email" value="<?php echo $email; ?>">
                        <label for="email">Địa chỉ Email</label>
                        <span class="error"> <?php echo $emailErr; ?></span>
                    </div>
                    <div class="form-login">
                        <input type="password" placeholder=" " class="password" name="password" value="<?php echo $password; ?>">
                        <label for="password">Mật khẩu</label>
                        <span class="error"><?php echo $passwordErr; ?></span>
                    </div>
                    <button class="login" type="submit">ĐĂNG NHẬP</button>
                </form>
                <div class="more">
                    <a href="" class="forget">Quên mật khẩu?</a>
                    <a href="" class="creat">Tạo tài khoản mới</a>
                </div>

            </div>
        </div>

        <div class="footer">
            <div class="footer-section">
                <div class="sologan">
                    <h3>ALINIEX</h3>
                    <p>Tại Aliniex chúng tôi luôn nỗ lực để tạo ra môi trường mua bán coin dễ dàng với chi phí thấp nhất dành cho bạn.</p>
                    <div class="icon">
                        <a href="https://www.facebook.com/Aliniex" class="ti-facebook"></a>
                        <a href="https://twitter.com/Aliniex" class="ti-sharethis"></a>
                        <a href="https://t.me/Aliniex" class="ti-twitter-alt"></a>
                    </div>
                </div>
                <div class="footer-content">
                    <div class="introduce">
                        <h4>ALINIEX</h4>
                        <a href="#">Giới thiệu Aliniex</a>
                        <a href="#">Biểu phí</a>
                        <a href="#">Điều khoản dịch vụ</a>
                        <a href="#">Chính sách giao dịch</a>
                        <a href="#">Bảo mật</a>
                        <a href="#">Chương trình giới thiệu</a>
                    </div>
                    <div class="product">
                        <h4>SẢN PHẨM</h4>
                        <a href="#">Mua bán coin</a>
                        <a href="#">Block Explorer</a>
                        <a href="#">API</a>
                        <a href="#">Tools</a>
                    </div>
                    <div class="support">
                        <h4>HỖ TRỢ</h4>
                        <a href="#">Hướng dẫn mua bán</a>
                        <a href="#">Forum</a>
                        <a href="#">Support</a>
                        <a href="#">Liên hệ</a>
                        <a href="#">Bảo mật</a>
                        <a href="#">Blog/News</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>© 2017 - 2022 Aliniex.com. All rights reserved</p>
        </div>
    </div>
</body>

</html>