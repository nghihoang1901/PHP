<?php 
    $_A = "";
    $_B = "";
    $_UCLN = "";
    $_BCNN = "";

    if(isset($_POST['A']) && isset($_POST['A'])){
        $_A = $_POST["A"];
        $_B = $_POST["B"];

        for ($i=1; ($i <= $_A && $i <= $_B) ; $i++) { 
            if(($_A % $i == 0) && ($_B % $i == 0)){
                $_UCLN = $i;
                $_BCNN = ($_A * $_B) / $_UCLN;
            }
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
                        <legend>ƯỚC CHUNG LỚN NHẤT VÀ BỘI CHUNG NHỎ NHẤT</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Số A
                        </div>
                        <div class="col-sm-7">                            
                            <input type="text" name="A" id="input" class="form-control" value="<?php echo $_A ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Số B
                        </div>
                        <div class="col-sm-7">                            
                            <input type="text" name="B" id="input" class="form-control" value="<?php echo $_B ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            UCLN
                        </div>
                        <div class="col-sm-7">                            
                            <input type="text" readonly="true" name="UCLN" id="input" class="form-control" value="<?php echo $_UCLN ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            BCNN
                        </div>
                        <div class="col-sm-7">                            
                            <input type="text" readonly="true" name="BCNN" id="input" class="form-control" value="<?php echo $_BCNN ?>">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Tìm UCLLN và BCNN</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
