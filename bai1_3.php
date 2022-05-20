<?php 
    $ban_kinh = "";
    $chu_vi = "";
    $dien_tich = "";

    if(isset($_POST["ban_kinh"])){
        $ban_kinh = $_POST["ban_kinh"];
        $chu_vi = 2 * pi(3.14) * $ban_kinh; 
        $dien_tich = pi(3.14) * pow($ban_kinh, 2);
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
                        <legend>DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            Bán kính
                        </div>
                        <div class="col-sm-10">                            
                            <input type="text" name="ban_kinh" id="input" class="form-control" value="<?php echo $ban_kinh ?>" >                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            Chu vi
                        </div>
                        <div class="col-sm-10">                            
                            <input type="text" readonly="true" name="chu_vi" id="input" class="form-control" value="<?php echo $chu_vi ?>" >                            
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
                            <button type="submit" class="btn btn-primary">Tính</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
