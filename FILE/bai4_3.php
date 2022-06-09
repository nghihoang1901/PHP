<?php
    echo '<pre>',print_r($_POST),'</pre>';
    if(isset($_POST['ten_file'])){
        $ten_file = $_POST['ten_file'] .'.txt';
        $f = fopen('file/' . $ten_file, 'a');
        $noi_dung = $_POST['noi_dung_file'];
        fwrite($f, $noi_dung);
        fclose($f);
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
                    <legend>THÊM NỘI DUNG VÀO FILE</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        Tên file:
                    </div>
                    <div class="col-sm-10">
                        <select name="ten_file" id="ten_file">
                            <option value="da_khuc_mua">Dạ khúc mưa</option>
                            <option value="doi_dep">Đôi dép</option>
                            <option value="sang_thang_5">Sáng tháng năm</option>
                            <option value="trang_khuyet">Trăng khuyết</option>
                            <option value="yeu">Yêu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        Nội dung:
                    </div>
                    <div class="col-sm-10">
                        <textarea name="noi_dung_file" id="" cols="30" rows="10">
                            <?php $noi_dung ?>
                        </textarea>
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