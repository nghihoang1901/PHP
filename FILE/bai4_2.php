<?php 
    if(isset($_POST['ten_file'])){
        $f = fopen($_POST['ten_file'], 'w');
        $noi_dung = $_POST['noi_dung'];
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
                    <legend>TẠO - GHI VÀ ĐỌC FILE VỪA TẠO</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        Tên file
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="ten_file" id="input" class="form-control" value="<?php if(isset($_POST['ten_file'])){echo $_POST['ten_file'];} ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        Nội dung
                    </div>
                    <div class="col-sm-8">
                        <textarea name="noi_dung" id="" cols="30" rows="10">
                        <?php if(isset($_POST['noi_dung'])){echo $_POST['noi_dung'];} ?>
                        </textarea>
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>
        <div class="noi_dung">
            <?php
                if(isset($_POST['ten_file'])){
                    echo str_replace(PHP_EOL, '</br>', file_get_contents($_POST['ten_file']));
                }
            ?>
        </div>
    </div>
</body>
</html>