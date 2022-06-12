<?php
    // echo "<pre>",print_r($_POST),"</pre>";
    session_start();

    if(isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['fullname']) && isset($_POST['psw']) && isset($_POST['psw-repeat'])){
        if($_POST['psw'] == $_POST['psw-repeat']){
            $_SESSION['user_info'] = [$_POST['uname'], 'Hữu Nghị'];
            echo "Đã tạo tài khoản thành công";
        }
        else{
            echo "Mật khẩu không khớp";
        }

        $string_data_user = file_get_contents("data/register.json");
        $mang_user = [];
        $noi_dung ='';
        if($string_data_user){
            $mang_user = json_decode($string_data_user);
        }
        $noi_dung .="\n" . "\t" . '{' 
            . "\n" . "\t" . "\t" . '"uname": ' . '"'. $_POST['uname'] . '"' . ',' 
            . "\n" . "\t" . "\t" . '"psw": ' . '"'. $_POST['psw'] . '"' . ',' 
            . "\n" . "\t" . "\t" . '"psw-repeat": ' . '"'. $_POST['psw-repeat'] . '"' . ',' 
            . "\n" . "\t" . "\t" . '"fullname": ' . '"'. $_POST['fullname'] . '"' . ',' 
            . "\n" . "\t" . "\t" . '"email": ' . '"'. $_POST['email'] . '"' 
            . "\n" . "\t" . '},' . "\n";
        
        $mang_user[] = $noi_dung;
        $f = fopen('data/register.json', 'w');
        $mang_noi_dung = json_encode($mang_user);
        fwrite($f, $mang_noi_dung);
        fclose($f);
        echo "<pre>",print_r($mang_user),"</pre>";
        
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

                

                <label for="uname"><b>User Name</b></label>
                <input type="text" placeholder="Enter user_name" name="uname" id="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

                <label for="fullname"><b>Full name</b></label>
                <input type="text" placeholder="Enter full name" name="fullname" id="fullname" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

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