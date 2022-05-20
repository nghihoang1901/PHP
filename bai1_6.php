<?php 
    $so_A = "";
    $so_B = "";
    $so_lon_hon = "";

    if(isset($_POST["so_A"]) && isset($_POST["so_B"])){
        $so_A = $_POST["so_A"];
        $so_B = $_POST["so_B"];
        
        if(($so_A - $so_B) > 0){
            $so_lon_hon = $so_A;
        }
        else{
            $so_lon_hon = $so_B;
        }
        
    }
?>


<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="bai_tap.css">
    </head>
    <body>
        <div class="container">
            
            <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend>TÌM SỐ LỚN HƠN</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            Số A
                        </div>
                        <div class="col-sm-8">                            
                            <input type="text" name="so_A" id="input" class="form-control" value="<?php echo $so_A ?>" >                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            Số B
                        </div>
                        <div class="col-sm-8">                            
                            <input type="text" name="so_B" id="input" class="form-control" value="<?php echo $so_B ?>" >                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            Số lớn hơn
                        </div>
                        <div class="col-sm-8">                            
                            <input type="text" name="so_lon_hon" readonly="true" id="input" class="form-control" value="<?php echo $so_lon_hon ?>" >                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Tìm</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
