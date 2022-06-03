<?php 
    $nhap_gio = "";
    $loi_chao = "";

    if(isset($_POST['nhap_gio'])){
        $nhap_gio = $_POST["nhap_gio"];
        if(($nhap_gio >= 0) && ($nhap_gio < 13)){
            $loi_chao = "Chào buổi sáng";
        }
        else if(($nhap_gio >= 13) && ($nhap_gio < 18)){
            $loi_chao = "Chào buổi chiều";
        }
        else if(($nhap_gio >= 18) && ($nhap_gio <= 23)){
            $loi_chao = "Chào buổi tối";
        }
        else{
            $loi_chao = "";
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
                        <legend>CHÀO THEO GIỜ</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            Nhập giờ: 
                        </div>
                        <div class="col-sm-7">
                            
                            <input type="text" name="nhap_gio" id="input" class="form-control" value="<?php echo $nhap_gio ?>">

                        </div>
                        <div class="col-sm-12">
                            <label for="" style="margin-top: 20px;"><?php echo $loi_chao ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Chào</button>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
