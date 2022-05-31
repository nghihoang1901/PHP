<?php 
    $_a = "";
    $_b = "";
    $_c = "";
    $_x1 = "";
    $_x2 = "";
    $_nghiem = "";

    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        $_a = $_POST["a"];
        $_b = $_POST["b"];
        $_c = $_POST["c"];
        

        if ($_a == 0) {
            $_x1 = ((-$_c) / ($_b));
            $_nghiem .= "Phương trình có 1 nghiệm: x = ".($_x1) ;
        }
        else{
            $_Delta = ((pow($_b, 2)) - (4 * $_a * $_c));
            if($_Delta < 0){
                $_nghiem .= "Phương trình vô nghiệm";
            }
            else if($_Delta == 0){
                $_x1 = $_x2 = ((-$_b) / (2 * $_a));
                $_nghiem .="Phương trình có nghiệm kép: x1 = x2 = ".$_x1 ;
            }
            else{
                $_x1 = (((-$_b) + sqrt($_Delta)) / (2 * $_a));
                $_x2 = (((-$_b) - sqrt($_Delta)) / (2 * $_a));
                $_nghiem .= "Phương trình có 2 nghiệm: x1 = ".$_x1 ." và x2 = ".$_x2;
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
                        <legend>GIẢI PHƯƠNG TRÌNH BẬC HAI</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            Phương trình:
                        </div>
                        <div class="col-sm-2">
                        <input type="text" name="a" id="input" class="form-control" value="<?php echo $_a ?>">
                        </div>               
                        <div class="col-sm-1" style="margin: 7px 0px 0px -28px">
                            x^2+               
                        </div>
                        <div class="col-sm-2">                           
                        <input type="text" name="b" id="input" class="form-control" value="<?php echo $_b ?>">
                        </div>     
                        <div class="col-sm-1" style="margin: 7px 0px 0px -28px">
                            x+ 
                        </div>
                        <div class="col-sm-2">
                        <input type="text" name="c" id="input" class="form-control" value="<?php echo $_c ?>">
                        </div>                 
                        <div class="col-sm-1" style="margin: 7px 0px 0px -28px">
                            =0
                        </div>
                        
                    </div>
                    <div class="form-group">
                        Nghiệm:
                        <input type="text" name="nghiem" id="input" class="form-control" value="<?php echo $_nghiem ?>">
                    </div>
            
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Giải phương trình</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
