<?php
    $so_N = 0;
    $list = [];

    if(isset($_POST["so_N"])){
        $so_N = $_POST["so_N"];

        if($so_N == 0){
            return 0;
        }
        else{
            for ($i=2; $i < $so_N ; $i++) { 
                if(($so_N % $i) == 0){
                    return 0;
                }       
            }
        }
        return 1;
        for ($i=2; $i < $so_N ; $i++){
            if($list[i] == 1);
            echo $list;
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
        <link rel="stylesheet" href="bai_tap.css">
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
    </head>
    <body>
        <div class="container">
            
            <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend>TÌM SỐ NGUYÊN TỐ</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Nhập N: 
                        </div>
                        <div class="col-sm-7">
                            
                            <input type="text" name="so_N" id="input" class="form-control" value="<?php echo $so_N ?>">
                            
                        </div>
                    </div>
                    
            
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">các số nguyên tố <= N</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            
                            <span class="label label-danger"><?php echo $list ?></span>
                            
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
