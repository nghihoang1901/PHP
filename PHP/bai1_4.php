<?php
    $ten_chu_ho = "";
    $chi_so_cu = "";
    $chi_so_moi = "";
    $don_gia = 2000;
    $so_tien_thanh_toan = "";

    if(isset($_POST["ten_chu_ho"]) && isset($_POST["chi_so_cu"]) && isset($_POST["chi_so_moi"])){
        $chi_so_moi = $_POST["chi_so_moi"];
        $chi_so_cu = $_POST["chi_so_cu"];
        $chi_so_moi = $_POST["chi_so_moi"];

        $so_tien_thanh_toan = ($chi_so_moi - $chi_so_cu) * $don_gia;
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
                        <legend>THANH TOÁN TIỀN ĐIỆN</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Tên chủ hộ:
                        </div>
                        <div class="col-sm-6">                            
                            <input type="text" name="ten_chu_ho" id="input" class="form-control" value="<?php echo $ten_chu_ho ?>">                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Chỉ số cũ:
                        </div>
                        <div class="col-sm-6">                            
                            <input type="text" name="chi_so_cu" id="input" class="form-control" value="<?php echo $chi_so_cu ?>">                            
                        </div>
                        <div class="col-sm-1">
                            (Kw)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Chỉ số mới:
                        </div>
                        <div class="col-sm-6">                            
                            <input type="text" name="chi_so_moi" id="input" class="form-control" value="<?php echo $chi_so_moi ?>">                                                      
                        </div>
                        <div class="col-sm-1">
                            (Kw)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Đơn giá:
                        </div>
                        <div class="col-sm-6">                            
                            <input type="text" name="don_gia" id="input" class="form-control" value="<?php echo $don_gia ?>" readonly="true">                            
                        </div>
                        <div class="col-sm-1">
                            (VNĐ)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Số tiền thanh toán:
                        </div>
                        <div class="col-sm-6">                            
                            <input type="text" readonly="true" name="so_tien_thanh_toan" id="input" class="form-control" value="<?php echo $so_tien_thanh_toan ?>">
                                                     
                        </div>
                        <div class="col-sm-1">
                            (VNĐ)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">tính</button>
                        </div>
                    </div>
            </form>
        </div>

        
    </body>
</html>
