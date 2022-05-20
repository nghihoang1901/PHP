<?php 
    $canh_1 = '';
    $canh_2 = "";
    $canh_3 = "";
    $loai_tam_giac = "";

    if(isset($_POST["canh_1"]) && isset($_POST["canh_2"]) && isset($_POST["canh_3"])){
        $canh_1 = $_POST["canh_1"];
        $canh_2 = $_POST["canh_2"];
        $canh_3 = $_POST["canh_3"];

        if((($canh_1 + $canh_2) < $canh_3) || (($canh_1 + $canh_3) < $canh_2) || (($canh_2 + $canh_3) < $canh_1)){
            $loai_tam_giac = "Không là tam giác";
        }
        else  if((($canh_1 + $canh_2) > $canh_3) || (($canh_1 + $canh_3) > $canh_2) || (($canh_2 + $canh_3) > $canh_1)){
            if((($canh_1 == $canh_2) && ($canh_1 == $canh_3))){
                $loai_tam_giac = "Tam giác đều";
            }
            else if(($canh_1 == $canh_2) || ($canh_1 == $canh_3) || ($canh_2 == $canh_3)){
                $loai_tam_giac = "Tam giác cân";
            }
            else if(( sqrt( pow($canh_1, 2) + pow($canh_2, 2) ) == $canh_3 ) || ( sqrt(pow($canh_1, 2) + pow($canh_3, 2)) == $canh_2 ) || ( sqrt(pow($canh_3, 2) + pow($canh_2, 2)) == $canh_1 )){
                $loai_tam_giac = "Tam giác vuông";
            }
            else if( (($canh_1 == $canh_2) && ( sqrt( pow($canh_1, 2) + pow($canh_2, 2) ) == $canh_3 )) || (($canh_1 == $canh_3) && ( sqrt( pow($canh_1, 2) + pow($canh_3, 2) ) == $canh_2 )) || (($canh_3 == $canh_2) && ( sqrt( pow($canh_3, 2) + pow($canh_2, 2) ) == $canh_1 )) ){
                $loai_tam_giac = "Tam giác vuông cân";
            }
            
            else{
                $loai_tam_giac = "Tam giác thường";
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
                        <legend>NHẬN DẠNG TAM GIÁC</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="margin-top: 10px; font-size: 16px">
                            Cạnh 1: 
                        </div>
                        <div class="col-sm-6">   
                            <input type="text" name="canh_1" id="input" class="form-control" value="<?php echo $canh_1 ?>">
                        </div>
                        <div class="col-sm-2" style="margin: 8px -40px; font-size: 16px">
                            (cm)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="margin-top: 10px; font-size: 16px">
                            Cạnh 2: 
                        </div>
                        <div class="col-sm-6">   
                            <input type="text" name="canh_2" id="input" class="form-control" value="<?php echo $canh_2 ?>">
                        </div>
                        <div class="col-sm-2" style="margin: 8px -40px; font-size: 16px">
                            (cm)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="margin-top: 10px; font-size: 16px">
                            Cạnh 3: 
                        </div>
                        <div class="col-sm-6">   
                            <input type="text" name="canh_3" id="input" class="form-control" value="<?php echo $canh_3 ?>">
                        </div>
                        <div class="col-sm-2" style="margin: 8px -40px; font-size: 16px">
                            (cm)
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4" style="margin-top: 10px; font-size: 16px">
                            Loại tam giác: 
                        </div>
                        <div class="col-sm-6">   
                            <input type="text" name="loai_tam_giac" id="input" class="form-control" value="<?php echo $loai_tam_giac ?>">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Nhận dạng</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
