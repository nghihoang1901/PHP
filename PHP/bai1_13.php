<?php 
    $_so = "";
    $_chu = "";

    if(isset($_POST["so"])){
        $_so = $_POST["so"];

        switch ($_so) {
            case '1':
                $_chu = "Một";
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
                $_chu = "Năm";
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
            default:
                if($_so > 9){
                    $_chu = "";
                }
                break;
        }
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
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <div class="form-group" style="display: flex">
                        <div class="col_sm-6" style="margin-left: 30px">
                            Nhập số (0 -> 9)
                        </div>
                        <div class="col-sm-5" style="margin-left: 90px">
                            Bằng chữ:                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">                            
                            <input type="text" name="so" id="input" class="form-control" value="<?php echo $_so ?>">
                        </div>
                        <div class="col-sm-2"> 
                        <button type="submit" class="btn btn-primary">=></button>
                        </div>
                        <div class="col-sm-4">                            
                            <input type="text" name="chu" id="input" class="form-control" value="<?php echo $_chu ?>">
                        </div>
                    </div>
            </form>
            
            
        </div>

        
    </body>
</html>
