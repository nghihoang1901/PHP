<?php 
    $thang = "";
    $nam = "";
    $ngay = "";
    $noi_dung = "";

    if(isset($_POST["thang"])){
        $thang = $_POST["thang"];
        $nam = $_POST["nam"];

        switch ($thang) {
            case '1':
                $ngay = "31";
                break;
            case '2':
                $ngay = "28";
                break;
            case '3':
                $ngay = "31";
                break;
            case '4':
                $ngay = "30";
                break;
            case '5':
                $ngay = "31";
                break;
            case '6':
                $ngay = "30";
                break;
            case '7':
                $ngay = "31";
                break;
            case '8':
                $ngay = "31";
                break;
            case '9':
                $ngay = "30";
                break;
            case '10':
                $ngay = "31";
                break;
            case '11':
                $ngay = "30";
                break;
            case '12':
                $ngay = "31";
                break;
            default:
                if($thang > 12){
                    $ngay = "";
                }
                break;
        }
        $noi_dung = "Tháng ".$thang." năm ".$nam." có ".$ngay." ngày."; 
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
                        <legend>TÍNH NGÀY TRONG THÁNG</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Tháng/năm:
                        </div>
                        <div class="col-sm-3">                            
                            <input type="text" name="thang" id="input" class="form-control" value="<?php echo $thang ?>">
                        </div>
                        <div class="col-sm-1" style="font-size: 20px ; margin: 6px -20px 0px">
                            /
                        </div>
                        <div class="col-sm-3">                            
                            <input type="text" name="nam" id="input" class="form-control" value="<?php echo $nam ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Tính số ngày</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">                            
                            <input type="text" name="noi_dung" id="input" class="form-control" value="<?php echo $noi_dung ?>">
                        </div>
                    </div>
            </form>
            
            
            
        </div>

        
    </body>
</html>
