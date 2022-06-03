<?php
    $day_so = "";
    $mang= [];
    $tang_dan = [];
    $giam_dan = [];
     if(isset($_POST["day_so"])){
        $day_so = $_POST["day_so"];
        $mang = explode(",", $day_so);

     }
    function tang_dan($mang){
        global $tang_dan;
        sort($mang);
        $tang_dan = implode(" ", $mang);
        return $tang_dan;
        
    }
    function giam_dan($mang){
        global $giam_dan;
        rsort($mang);
        $giam_dan = implode(" ", $mang);
        return $giam_dan;
        
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
                <legend>SẮP XẾP MẢNG</legend>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Nhập mảng:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="day_so" id="input" class="form-control" value="<?php echo $day_so ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Sắp xếp tăng/giảm</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4" style="color: red; font-weight: bold">
                    sau khi sắp xếp
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Tăng dần:
                </div>
                <div class="col-sm-8">
                    <input type="text" readonly="true" name="tang_dan" id="input" class="form-control" value="<?php echo tang_dan($mang); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Giảm dần:
                </div>
                <div class="col-sm-8">
                    <input type="text" readonly="true" name="giam_dan" id="input" class="form-control" value="<?php echo giam_dan($mang); ?>">
                </div>
            </div>
    </form>
    
</body>
</html>