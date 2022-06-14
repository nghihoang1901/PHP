<?php
    echo "<pre>",print_r($_POST),"</pre>";
    session_start();
    // $string_data_user = file_get_contents("data/register.json");
    // $mang_user = [];
    // if($string_data_user){
    //     $mang_user = json_decode($string_data_user);
    // }

    // if(isset($_POST['email']) && isset($_POST['tai_khoan']) && isset($_POST['ho_ten']) && isset($_POST['mat_khau']) && isset($_POST['re_mat_khau'])){
    //     if($_POST['email'] && $_POST['tai_khoan'] && $_POST['ho_ten'] && $_POST['mat_khau'] && $_POST['mat_khau']){
    //         if($_POST['mat_khau'] == $_POST['re_mat_khau']){
    //             $flag_exist = 0;
    //             foreach($mang_user as $user_exist){
    //                 if($user_exist->tai_khoan == $_POST['tai_khoan']){
    //                     $flag_exist = 1;
    //                     break;
    //                 }
    //             }
    //             if($flag_exist == 0){
    //                 $user_new = new stdClass;
    //                 $user_new->tai_khoan = $_POST['tai_khoan'];
    //                 $user_new->mat_khau = $_POST['mat_khau'];
    //                 $user_new->ho_ten = $_POST['ho_ten'];
    //                 $user_new->email = $_POST['email'];
    //                 $mang_user[] = $user_new;
    //                 $string_data_user_new = json_encode($mang_user);
    //                 file_put_contents("data/user.json", $string_data_user_new);
    //                 echo "tạo tài khoản thàn công, sau 3 giây bạn sẽ tự động đăng nhập vào chuyển sang trang thông tin";
    //                 sleep(3);
    //                 $_SESSION['user_info'] = $user_new;
    //                 header("location: xin_chao.php");
    //             }
    //             else{
    //                 echo "Username đã tồn tại, vui lòng tạo lại username";
    //             }
    //         }
    //         else{
    //             echo "mật khẩu không khớp, vui lòng kiểm tra lại";
    //         }
    //     }
    //     else{
    //         echo "vui lòng nhập đầy đủ thông tin";
    //     }
            
    // }
    if(isset($_SESSION['user_info']) || isset($_COOKIE['user_info'])){
        header("location: xin_chao.php");
    }
        
    if(isset($_POST['email']) && isset($_POST['tai_khoan']) && isset($_POST['ho_ten']) && isset($_POST['mat_khau']) && isset($_POST['re_mat_khau'])){

        $tai_khoan = $_POST['tai_khoan'];
        $mat_khau = $_POST['mat_khau'];
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $dia_chi = $_POST['dia_chi'];
        $dien_thoai = $_POST['dien_thoai'];

        if($_POST['email'] && $_POST['tai_khoan'] && $_POST['ho_ten'] && $_POST['mat_khau'] && $_POST['re_mat_khau']){
            if($_POST['mat_khau'] == $_POST['re_mat_khau']){
                $dbh = new PDO('mysql:host=localhost;dbname=ban_sach_online_db', 'root', '');

                $sql = "INSERT INTO bs_nguoi_dung(tai_khoan, mat_khau, id_loai_user, ho_ten, email, ngay_sinh, dia_chi, dien_thoai)
                VALUES('$tai_khoan', '$mat_khau', 1, '$ho_ten', '$email', '$ngay_sinh', '$dia_chi', '$dien_thoai')";
                $result = $dbh->exec($sql);
                // header("location: xin_chao.php");
                if($result !== false){
                    $user_new = new stdClass;
                    $user_new->tai_khoan = $tai_khoan;
                    $user_new->ho_ten = $ho_ten;
                    $_SESSION['user_info'] = $user_new;
                    echo "<script> 
                            alert('Bạn đã đăng ký thành công');
                            window.location.href = 'xin_chao.php'; 
                        </script>";
                }
                else{
                    echo "<script> alert('Có lỗi xảy ra trong quá trình đăng ký') </script>";
                }
                $dbh = NULL;
            }
            else{
                echo "mật khẩu không khớp, vui lòng kiểm tra lại";
            }
        }
        else{
            echo "vui lòng nhập đầy đủ thông tin";
        }
            
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        * {box-sizing: border-box}

        /* Add padding to containers */
        .container_form {
        padding: 16px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
        }

        /* Set a style for the submit/register button */
        .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        }

        .registerbtn:hover {
        opacity:1;
        }

        /* Add a blue text color to links */
        a {
        color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
        background-color: #f1f1f1;
        text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="container_form">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="tai_khoan"><b>Tài khoản</b></label>
                <input type="text" placeholder="Enter user_name" name="tai_khoan" id="tai_khoan" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="mat_khau"><b>mật khẩu</b></label>
                <input type="password" placeholder="Enter mật khẩu" name="mat_khau" id="mat_khau" required>

                <label for="re_mat_khau"><b>Re mật khẩu</b></label>
                <input type="password" placeholder="Repeat mật khẩu" name="re_mat_khau" id="re_mat_khau" required>

                <label for="ho_ten"><b>Họ tên</b></label>
                <input type="text" placeholder="Enter ho ten" name="ho_ten" id="ho_ten" required>

                <label for="ngay_sinh"><b>Ngày sinh</b></label>
                <input type="date" name="ngay_sinh" id="ngay_sinh" required></br>

                <label for="dia_chi"><b>địa chỉ</b></label>
                <input type="text" placeholder="Enter dia chi" name="dia_chi" id="dia_chi" required>

                <label for="dien_thoai"><b>điện thoại</b></label>
                <input type="text" placeholder="Enter dien thoai" name="dien_thoai" id="dien_thoai" required>

                
                <hr>

                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" class="registerbtn">Register</button>
            </div>

            <div class="container_form signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
        </form>
    </div>
</body>
</html>