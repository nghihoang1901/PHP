<?php
    $chuoi_A = "";
    $chuoi_B = "";
    $mang_A = "";
    $mang_B = "";
    $mang_C=[];
    $so_phan_tu_mang_A = "";
    $so_phan_tu_mang_B = "";
    $tang_dan = [];
    $giam_dan = [];

    if(isset($_POST['chuoi_A']) && isset($_POST['chuoi_B'])){
        $chuoi_A = $_POST['chuoi_A'];
        $chuoi_B = $_POST['chuoi_B'];

        $mang_A = explode(",", $chuoi_A);
        $mang_B = explode(",", $chuoi_B);
        $so_phan_tu_mang_A = count($mang_A);
        $so_phan_tu_mang_B = count($mang_B);
        $chuoi_C = implode(",", array_merge($mang_A,$mang_B));
        $mang_C = explode(",", $chuoi_C);
        // echo "<pre>",print_r($mang_C),"</pre>";
    }    
    function tang_dan($mang_C){
        global $tang_dan;
        sort($mang_C);
        $tang_dan = implode(",", $mang_C);
        return $tang_dan;
        
    }
    function giam_dan($mang_C){
        global $giam_dan;
        rsort($mang_C);
        $giam_dan = implode(",", $mang_C);
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
                <legend>Form title</legend>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Mảng A:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="chuoi_A" id="input" class="form-control" value="<?php echo $chuoi_A ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Mảng B:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="chuoi_B" id="input" class="form-control" value="<?php echo $chuoi_B ?>">
                </div>
            </div>
    
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Thực hiện</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    Số phần tử mảng A:
                </div>
                <div class="col-sm-3">
                    <input type="text" name="so_phan_tu_mang_A" id="input" class="form-control" value="<?php echo $so_phan_tu_mang_A ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                Số phần tử mảng B:
                </div>
                <div class="col-sm-3">
                    <input type="text" name="so_phan_tu_mang_B" id="input" class="form-control" value="<?php echo $so_phan_tu_mang_B ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Mảng C:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="chuoi_C" id="input" class="form-control" value="<?php echo $chuoi_C ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Mảng C tăng dần:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="tang_dan" id="input" class="form-control" value="<?php echo tang_dan($mang_C) ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    Mảng C giảm dần:
                </div>
                <div class="col-sm-8">
                    <input type="text" name="giam_dan" id="input" class="form-control" value="<?php echo giam_dan($mang_C) ?>">
                </div>
            </div>
    </form>
    
</body>
</html>