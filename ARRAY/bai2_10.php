<?php
    $chuoi = "";
    $mang_duy_nhat=[];
    $mang_dem_so_phan_tu=[];

    function tim_mang_duy_nhat($mang){
        global $mang_duy_nhat;
        for ($i=0; $i < count($mang); $i++) { 
            $flag = 0;
            for ($j=0; $j < count($mang_duy_nhat); $j++) { 
                if($mang[$i]==$mang_duy_nhat[$j]){
                    $flag = 1;
                    break;
                }
            }
            if($flag == 0){
                $mang_duy_nhat[] = $mang[$i];
            }
        }
        return $mang_duy_nhat;
    }
    function dem_so_phan_tu($mang){
        $mang_dem_so_phan_tu = [];
        $mang_duy_nhat = [];

        for ($i=0; $i < count($mang); $i++) { 
            $flag = 0;
            for ($j=0; $j < count($mang_duy_nhat); $j++) { 
                if($mang[$i]==$mang_duy_nhat[$j]){
                    $mang_dem_so_phan_tu[$i] += 1;
                    $flag = 1;
                    break;
                }
            }
            if($flag == 0){
                $mang_duy_nhat[] = $mang[$i];
                $mang_dem_so_phan_tu[] = 1;
            }
        }
        return $mang_dem_so_phan_tu;
    }

    if(isset($_POST['chuoi'])){
        $chuoi = $_POST['chuoi'];
        $mang = explode(",", $chuoi);

        $mang_duy_nhat = tim_mang_duy_nhat($mang);
        $mang_dem_so_phan_tu = dem_so_phan_tu($mang);
    }
    function xuat_mang($mang){
        $chuoi_mang = implode(" ", $mang);
        return $chuoi_mang;
    }
    function xuat_mang_dem($mang_dem){
        $chuoi_mang = '';
        foreach($mang_dem as $key => $value){
            $chuoi_mang .= $key. ":". $value. " ";
        }
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
                <legend>Form title</legend>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    Nhập mảng:
                </div>
                <div class="col-sm-10">
                    <input type="text" name="chuoi" id="input" class="form-control" value="<?php echo $chuoi ?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    Số lần xuất hiện:
                </div>
                <div class="col-sm-10">
                    <input type="text" name="mang_dem_so_phan_tu" id="input" class="form-control" value="<?php echo xuat_mang_dem($mang_dem_so_phan_tu); ?>" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    Mảng duy nhất:
                </div>
                <div class="col-sm-10">
                    <input type="text" name="mang_duy_nhat" id="input" class="form-control" value="<?php echo xuat_mang($mang_duy_nhat); ?>" >
                </div>
            </div>
    
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>
    
</body>
</html>