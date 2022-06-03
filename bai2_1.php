<?php 
    $day_so ='';
    $mang = [];
    if(isset($_POST["day_so"])){
        $day_so = $_POST["day_so"];
        
    }
    $mang = explode(" ",$day_so);
    $tong = 0;
    $tong = array_sum($mang);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bai_tap.css">
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        
        <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Form title</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-3">
                        Nhập dãy số:     
                    </div>
                    <div class="col-sm-8">
                        <input type="text" name="day_so" id="input" class="form-control" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Tổng dãy số</button>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="tong" id="input" class="form-control" value="<?php echo $tong ?>" >
                </div>
        </form>
        
    </div>
</body>
</html>
