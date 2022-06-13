<?php
    $chuoi_1 = "";
    $chuoi_2 = "";
    $mang_1 = [];
    $mang_2 = [];
    $phan_tu_mang_1 = [];
    $phan_tu_mang_2 = [];
    $duy_nhat_1 = "";
    $duy_nhat_2 = "";
    if(isset($_POST['chuoi_1']) && isset($_POST['chuoi_2'])){
        $chuoi_1 = $_POST['chuoi_1'];
        $chuoi_2 = $_POST['chuoi_2'];
        $mang_1 = explode(",", $chuoi_1);
        $mang_2 = explode(",", $chuoi_2);
        
        $phan_tu_mang_1 = array_diff($mang_1,$mang_2);
        $duy_nhat_1 = implode(",", $phan_tu_mang_1);
        $phan_tu_mang_2 = array_diff($mang_2,$mang_1);
        $duy_nhat_2 = implode(",", $phan_tu_mang_2);
        
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
                <legend>Form title</legend>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    mảng chuỗi thứ nhất:
                </div>
                <div class="col-sm-7">
                    <input type="text" name="chuoi_1" id="input" class="form-control" value="<?php if(isset($_POST['chuoi_1'])){echo $_POST['chuoi_1'];} ?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    mảng chuỗi thứ hai:
                </div>
                <div class="col-sm-7">
                    <input type="text" name="chuoi_2" id="input" class="form-control" value="<?php if(isset($_POST['chuoi_2'])){echo $_POST['chuoi_2'];} ?>" >
                </div>
            </div>
    
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Phân tích hai mảng</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    phần tử chỉ có trong mảng thứ nhất:
                </div>
                <div class="col-sm-7">
                    <input type="text" name="duy_nhat_1" id="input" class="form-control" value="<?php echo $duy_nhat_1 ?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    phần tử chỉ có trong mảng thứ hai:
                </div>
                <div class="col-sm-7">
                    <input type="text" name="duy_nhat_2" id="input" class="form-control" value="<?php echo $duy_nhat_2 ?>" >
                </div>
            </div>
    </form>
    
</body>
</html>