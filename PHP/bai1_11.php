<?php
    $gio_bat_dau = '';
    $gio_ket_thuc = "";
    $don_gia = "";
    $tien_thanh_toan = "";
    $thoi_gian = "";


    if(isset($_POST["gio_bat_dau"]) && isset($_POST["gio_ket_thuc"])){
        $gio_bat_dau = $_POST['gio_bat_dau'];
        $gio_ket_thuc = $_POST["gio_ket_thuc"];

        $thoi_gian = $gio_ket_thuc - $gio_bat_dau;

        if($gio_ket_thuc <= $gio_bat_dau){
            $tien_thanh_toan = "Giờ kết thúc phải > giờ bắt đầu";
        }
        else{
            if(($gio_bat_dau >= 10) && ($gio_ket_thuc < 17)){
                $don_gia = 20000;                
                $tien_thanh_toan = $don_gia * $thoi_gian;
            }
            else if(($gio_bat_dau >= 17) && ($gio_ket_thuc < 24)){
                $don_gia = 45000;
                $tien_thanh_toan = $don_gia * $thoi_gian;
            }
            else if(($gio_bat_dau >= 10) && ($gio_ket_thuc > 17) && ($gio_ket_thuc < 24)){
                $tien_thanh_toan = ((17 - $gio_bat_dau) * 20000) + (($gio_ket_thuc - 17) * 45000);
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
                        <legend>TÍNH TIỀN KARAOKE</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="margin-top: 10px; font-size: 16px">
                            Giờ bắt đầu: 
                        </div>
                        <div class="col-sm-6">   
                            <input type="text" name="gio_bat_dau" id="input" class="form-control" value="<?php echo $gio_bat_dau ?>">
                        </div>
                        <div class="col-sm-2" style="margin: 8px -40px; font-size: 16px">
                            (h)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="margin-top: 10px; font-size: 16px">
                            Giờ kết thúc: 
                        </div>
                        <div class="col-sm-6">   
                            <input type="text" name="gio_ket_thuc" id="input" class="form-control" value="<?php echo $gio_ket_thuc ?>">
                        </div>
                        <div class="col-sm-2" style="margin: 8px -40px; font-size: 16px">
                            (h)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="margin-top: 10px; font-size: 16px">
                            Tiền thanh toán: 
                        </div>
                        <div class="col-sm-6">   
                            <input type="text" readonly="true" name="tien_thanh_toan" id="input" class="form-control" value="<?php echo $tien_thanh_toan ?>">
                        </div>
                        <div class="col-sm-2" style="margin: 8px -30px; font-size: 16px">
                            (VNĐ)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Tính tiền</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
