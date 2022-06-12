<?php
    if(isset($_POST['folder'])){
        // $folder = $_POST['folder'];
        $dir = opendir($_POST['folder']);
        
        while(($file = readdir($dir)) !== FALSE){
            if(($file != ".") && ($file != '..')){
                if(is_file($_POST['folder'] . '/' . $file)){
                    echo 'file: ' . $file . "</br>";
                }
                else{
                    echo 'folder: ' . $file . "</br>";
                }
            }
           
        }
        closedir($dir);
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
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group" style="text-align: center">
                ĐỌC THƯ MỤC ĐƯỢC CHỌN
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    chọn thư mục:
                </div>
                <div class="col-sm-6">
                    <input type="text" name="folder" id="input" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2"></div>
                <button type="submit" class="btn btn-success">Đọc thư mục</button>
            </div>
        </form>
    </div>
</body>
</html>