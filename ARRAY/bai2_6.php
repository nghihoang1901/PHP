<?php
    $chuoi = "";
    $mang = [];
    $can_thay_the = "";
    $thay_the = "";
    $ket_qua = "";

    if(isset($_POST["chuoi"]) && isset($_POST["can_thay_the"]) && isset($_POST["thay_the"])){
        $chuoi = $_POST["chuoi"];
        $can_thay_the = $_POST["can_thay_the"];
        $thay_the = $_POST["thay_the"];
        $mang = explode(",", $chuoi);
        $ket_qua = str_replace($can_thay_the, $thay_the, $chuoi);
        
    }
    function xuat_mang($mang){
        $chuoi_mang = implode(' ', $mang);
        return $chuoi_mang;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bai_tap.css">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>THAY THẾ</legend>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Nhập các phần tử: 
                </div>
                <div class="col-sm-8">
                    <input type="text" name="chuoi" id="input" class="form-control" value="<?php echo $chuoi ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Gía thị cần thay thế: 
                </div>
                <div class="col-sm-8">
                    <input type="text" name="can_thay_the" id="input" class="form-control" value="<?php echo $can_thay_the ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Gía trị thay thế:  
                </div>
                <div class="col-sm-8">
                    <input type="text" name="thay_the" id="input" class="form-control" value="<?php echo $thay_the ?>">
                </div>
            </div>
            
    
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Thay thế</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                   Mảng cũ:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="mang" id="input" class="form-control" value="<?php echo xuat_mang($mang); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Mảng sau khi thay thế: 
                </div>
                <div class="col-sm-8">
                    <input type="text" name="ket_qua" id="input" class="form-control" value="<?php echo $ket_qua ?>">
                </div>
            </div>
    </form>
    
</body>
</html>