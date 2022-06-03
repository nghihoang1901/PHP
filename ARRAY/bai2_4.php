<?php
    $mang_phan_tu = [];
    $so_phan_tu ="";
    if(isset($_POST['so_phan_tu'])){
        $so_phan_tu = $_POST['so_phan_tu'];
    }
    else{
        $so_phan_tu = 0;
    }

    if($so_phan_tu > 0){
        for($i = 0; $i < $so_phan_tu; $i ++){
            $random_number = rand(0,20);
            $mang_phan_tu[] = $random_number;
        }
    }
    else{
        echo 'số phần tử ảo';
    }

    function tim_min($mang_phan_tu){
        $min = $mang_phan_tu[0];
        for($i = 0; $i < count($mang_phan_tu); $i++){
            if($min > $mang_phan_tu[$i]){
                $min = $mang_phan_tu[$i];
            }
        }
        return $min;
    }

    function tim_max($mang_phan_tu){
        $max = $mang_phan_tu[0];
        for($i = 0; $i < count($mang_phan_tu); $i++){
            if($max < $mang_phan_tu[$i]){
                $max = $mang_phan_tu[$i];
            }
        }
        return $max;
    }

    function xuat_mang($mang_phan_tu){
        $chuoi_mang = implode(' ', $mang_phan_tu);
        return $chuoi_mang;
    }

    function tong_mang($mang_phan_tu){
        $tong = 0;
        for($i = 0; $i < count($mang_phan_tu); $i++){
            $tong += $mang_phan_tu[$i];
        }
        return $tong;
    }
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Tạo mảng và tính toán</legend>
                </div>
        
                <div class="form-group">
                    <div class="col-sm-2">
                        nhập số phần tử
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="so_phan_tu" id="inputso_phan_tu" class="form-control" value="" title="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2">
                        Xuất mảng
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="" id="" class="form-control" value="<?php echo xuat_mang($mang_phan_tu); ?>" title="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2">
                        MIN
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="" id="" class="form-control" value="<?php echo tim_min($mang_phan_tu); ?>" title="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2">
                        MAX
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="" id="" class="form-control" value="<?php echo tim_max($mang_phan_tu); ?>" title="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-2">
                        Tổng mảng
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="" id="" class="form-control" value="<?php echo tong_mang($mang_phan_tu); ?>" title="">
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>
        
    </div>
</body>
</html>