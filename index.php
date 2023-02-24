<!-- $email = $password = '';
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
        } -->

<?php
function tang3(&$x)
{
    $x = 3;
}

tang3($x);
echo $x;
