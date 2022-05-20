<?php 
    $canh_A = "";
    $canh_B = "";
    $dien_tich = "";

    if(isset($_POST["canh_A"]) && isset($_POST["canh_B"])){
        $canh_A = $_POST["canh_A"];
        $canh_B = $_POST["canh_B"];
        $dien_tich = ($canh_A * $canh_B);
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
        <link rel="stylesheet" href="bai_tap.css">

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
                        <legend>DIỆN TÍCH HÌNH CHỮ NHẬT</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            Cạnh A
                        </div>
                        <div class="col-sm-10">                            
                            <input type="text" name="canh_A" id="input" class="form-control" value="<?php echo $canh_A ?>" >                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            Cạnh B
                        </div>
                        <div class="col-sm-10">                            
                            <input type="text" name="canh_B" id="input" class="form-control" value="<?php echo $canh_B ?>" >                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            Diện Tích
                        </div>
                        <div class="col-sm-10">                            
                            <input type="text" name="dien_tich" readonly="true" id="input" class="form-control" value="<?php echo $dien_tich ?>" >                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
