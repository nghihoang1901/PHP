<?php
    $start = 0;
    $end = 0;
    $tong = 0;
    $tich = 1;
    $chan = 0;
    $le = 0;

    if(isset($_POST["start"]) && isset($_POST["end"])){
        $start = $_POST["start"];
        $end = $_POST["end"];

        for ($i = $start; $i <= $end  ; $i++) { 
            $tong += $i;
            $tich *= $i;
        }
        if(($start % 2) == 0){
            for ($i = $start; $i <= $end  ; $i += 2){
                $chan += $i;
            }
            for($i = $start + 1; $i <= $end  ; $i += 2){
                $le += $i;
            }
        }
        else{
            for ($i = $start; $i <= $end  ; $i += 2){
                $le += $i;
            }
            for($i = $start + 1; $i <= $end  ; $i += 2){
                $chan += $i;
            }
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
                        <legend>TÍNH TOÁN TRÊN DÃY SỐ</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Giới hạn của dãy số
                        </div>
                        <div class="col-sm-2">
                            Số bắt đầu
                        </div>
                        <div class="col-sm-2">                            
                            <input type="text" name="start" id="input" class="form-control" value="<?php echo $start ?>">
                        </div>
                        <div class="col-sm-2">
                            Số kết thúc
                        </div>
                        <div class="col-sm-2">                            
                            <input type="text" name="end" id="input" class="form-control" value="<?php echo $end ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12" style="color: brown">
                            Kết quả
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="color: brown">
                            Tổng các số:
                        </div>
                        <div class="col-sm-7">                            
                            <input type="text" name="tong" id="input" class="form-control" value="<?php echo $tong ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="color: brown">
                            Tích các số:
                        </div>
                        <div class="col-sm-7">                            
                            <input type="text" name="tich" id="input" class="form-control" value="<?php echo $tich ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="color: brown">
                            Tổng các số chẵn:
                        </div>
                        <div class="col-sm-7">                            
                            <input type="text" name="chan" id="input" class="form-control" value="<?php echo $chan ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="color: brown">
                            Tổng các số lẽ:
                        </div>
                        <div class="col-sm-7">                            
                            <input type="text" name="le" id="input" class="form-control" value="<?php echo $le ?>">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Tính toán</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
