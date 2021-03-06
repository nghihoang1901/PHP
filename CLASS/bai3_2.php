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
            $hien_thi = '';
            $hien_thi .= '<div style ="align-item:"'. $this->align . '/>'; 
            $hien_thi .= '<div class="title>"'. $this->title . '</div>';
            $hien_thi .= '<img src='. $this->src . 'alt=' . $this->alt . 'style="height:' . $this->height .'px; width:' . $this->width .' px; border:' . $this->border . '"/>'; 
            $hien_thi .= '</div>';
            return $hien_thi;
        }
    }
    
    $hien_thi = '';
    if(isset($_POST['title']) && isset($_POST['src']) && isset($_POST['alt']) && isset($_POST['width']) && isset($_POST['height']) && isset($_POST['border'])){
        $image = new image($_POST['title'], $_POST['src'], $_POST['alt'], $_POST['width'], $_POST['height'], $_POST['border'], $_POST['align']);
        $hien_thi = $image->hien_thi_hinh_anh();
    }

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
                    <legend>HI???N TH??? H??NH ???NH</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        Ti??u ?????
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="title" id="input" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        ???????ng d???n h??nh
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="src" id="input" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        d??ng ghi ch??
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="alt" id="input" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        chi???u r???ng
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="width" id="input" class="form-control" value="">
                    </div>
                    <div class="col-sm-3">
                        chi???u cao
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="height" id="input" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        ???????ng vi???n
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="border" id="input" class="form-control" value="">
                    </div>
                    <div class="col-sm-3">
                        canh l???
                    </div>
                    <div class="col-sm-2">
                        <select name="align" id="">
                            <option value="center">center</option>
                            <option value="left">left</option>
                            <option value="right">right</option>
                        </select>
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">hi???n th???</button>
                    </div>
                </div>
                
        </form>
        <div class="hien_thi">
            <?php echo $hien_thi ?>
        </div>
    </div>
    
</body>
</html>