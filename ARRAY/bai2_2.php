<?php
    $ho_va_ten = "";
    $ho="";
    $ten_dem="";
    $ten="";
    if(isset($_POST['ho_va_ten'])){
        $ho_va_ten = $_POST['ho_va_ten'];

        $mang = explode(" ", $ho_va_ten);
        $so_phan_tu = count($mang);
        $ho = $mang[0];
        $ten = $mang[$so_phan_tu - 1];

        for ($i=1; $i < ($so_phan_tu - 1) ; $i++) { 
            $ten_dem .=" " .$mang[$i];
        }
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
                <legend>TÁCH HỌ TÊN</legend>
            </div>
            <div class="form-group">
                <div class="col-sm-3 ">
                    Họ và tên:
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="ho_va_ten" id="input" class="form-control" value="<?php echo $ho_va_ten ?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3 ">
                    Họ:
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="ho" id="input" class="form-control" value="<?php echo $ho ?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3 ">
                    Tên đệm:
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="ten_dem" id="input" class="form-control" value="<?php echo $ten_dem ?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3 ">
                    Tên:
                </div>
                <div class="col-sm-8 ">
                    <input type="text" name="ten" id="input" class="form-control" value="<?php echo $ten ?>" >
                </div>
            </div>
    
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tách họ tên</button>
                </div>
            </div>
    </form>
    
</body>
</html>