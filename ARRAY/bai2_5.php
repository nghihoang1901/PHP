<?php 
    $day_so = "";
    $mang = [];
    $so_can_tim = "";
    $ket_qua = '';

    if(isset($_POST["day_so"]) && isset($_POST["so_can_tim"])){
        $day_so = $_POST["day_so"];
        $so_can_tim = $_POST["so_can_tim"];

        $mang = explode(",", $day_so);
        $ket_qua .= "Tìm thấy ". $so_can_tim. " tại vị trí thứ ". array_search($so_can_tim, $mang). " của mảng";
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
    <link rel="stylesheet" media="screen" href="//netlink:cssdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>TÌM KIẾM</legend>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Nhập mảng:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="day_so" id="input" class="form-control" value="<?php echo $day_so?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Nhập số cần tìm:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="so_can_tim" id="input" class="form-control" value="<?php echo $so_can_tim?>">
                </div>
            </div>
    
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Mảng:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="mang" id="input" class="form-control" value="<?php echo xuat_mang($mang); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Kết quả tìm kiếm:
                </div>
                <div class="col-sm-10">
                    <input type="text" name="ket_qua" id="input" class="form-control" value="<?php echo $ket_qua ?>">
                </div>
            </div>
    </form>
    
</body>
</html>