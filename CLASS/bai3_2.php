<?php 
    class image{
        public $title, $src, $alt, $width, $height, $border, $align;
        function __construct($title, $src, $alt, $width, $height, $border, $align){
            $this->title = $title;
            $this->src = $src;
            $this->alt = $alt;
            $this->width = $width;
            $this->height = $height;
            $this->border = $border;
            $this->align = $align;
        }

        function hien_thi_hinh_anh(){
            return $title;
            return $alt;
            return $src;
            return $width;
            return $height;
            return $border;
            return $align;

        }
    }
    $hien_thi = '';
    if(isset($_POST["hien_thi_hinh_anh"])){
        if(isset($_POST["title"], $_POST["src"], $_POST["alt"], $_POST["width"], $_POST["height"], $_POST["border"], $_POST["align"])){
            $hien_thi = new hien_thi_hinh_anh(isset($_POST["title"], $_POST["src"], $_POST["alt"], $_POST["width"], $_POST["height"], $_POST["border"], $_POST["align"]));
        }
    }
    return $hien_thi;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bai_tap.css"> -->
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>HIỂN THỊ HÌNH ẢNH</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        Tiêu đề
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="title" id="input" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        Đường dẫn hình
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="src" id="input" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        dòng ghi chú
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="alt" id="input" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        chiều rộng
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="width" id="input" class="form-control" value="">
                    </div>
                    <div class="col-sm-3">
                        chiều cao
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="height" id="input" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        đường viền
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="border" id="input" class="form-control" value="">
                    </div>
                    <div class="col-sm-3">
                        canh lề
                    </div>
                    <div class="col-sm-2">
                        <input type="option" name="align" id="input" class="form-control" value="">
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">hiển thị</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8">
                        <img />
                    </div>
                </div>
        </form>
        
    </div>
    
</body>
</html>