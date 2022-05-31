<?php 
    $_so = "";
    $_chu = "";
    $hang_tram = "";
    $hang_chuc = "";
    $hang_don_vi = "";
    $ket_qua = "";

    if(isset($_POST["so"])){
        $_so = $_POST["so"];

        if($_so / 100 >= 1){
            $hang_tram  = $_so / 100;
            $hang_chuc = ($_so - ($hang_tram * 100)) / 10;
            $hang_don_vi = ($_so - ($hang_tram * 100)) % 10;
            switch ($hang_tram) {
                case '1':
                    $_chu = "Một trăm";
                    break;
                case '2':
                    $_chu = "Hai trăm";
                    break;
                case '3':
                    $_chu = "Ba trăm";
                    break;
                case '4':
                    $_chu = "Bốn trăm";
                    break;
                case '5':
                    $_chu = "Năm trăm";
                    break;
                case '6':
                    $_chu = "Sáu trăm";
                    break;
                case '7':
                    $_chu = "Bảy trăm";
                    break;
                case '8':
                    $_chu = "Tám trăm";
                    break;
                case '9':
                    $_chu = "Chín trăm";
                    break;
            }
            switch ($hang_chuc) {
                case '1':
                    $_chu = "Mười";
                    break;
                case '2':
                    $_chu = "Hai mươi";
                    break;
                case '3':
                    $_chu = "Ba mươi";
                    break;
                case '4':
                    $_chu = "Bốn mươi";
                    break;
                case '5':
                    $_chu = "Năm mươi";
                    break;
                case '6':
                    $_chu = "Sáu mươi";
                    break;
                case '7':
                    $_chu = "Bảy mươi ";
                    break;
                case '8':
                    $_chu = "Tám mươi";
                    break;
                case '9':
                    $_chu = "Chín mươi";
                    break;
            }
            switch ($hang_don_vi) {
                case '1':
                    $_chu = "Mốt";
                    break;
                case '2':
                    $_chu = "Hai";
                    break;
                case '3':
                    $_chu = "Ba";
                    break;
                case '4':
                    $_chu = "Bốn";
                    break;
                case '5':
                    $_chu = "Lăm";
                    break;
                case '6':
                    $_chu = "Sáu";
                    break;
                case '7':
                    $_chu = "Bảy";
                    break;
                case '8':
                    $_chu = "Tám";
                    break;
                case '9':
                    $_chu = "Chín";
                    break;
            }
        }
        $ket_qua .= "$_chu"; 
            
            
            
        
    }
?>


<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="bai_tap.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            
            <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend>ĐỌC SỐ</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5">
                            Nhập số ( 0 -> 999):
                        </div>
                        <div class="col-sm-3">                           
                            <input type="text" name="so" id="input" class="form-control" value="<?php echo $_so ?>">
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            Bằng chữ:
                        </div>
                    <div class="col-sm-8">                           
                            <input type="text" name="ket_qua" id="input" class="form-control" value="<?php echo $ket_qua ?>">
                        </div>
                    </div>
            </form>
            
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
