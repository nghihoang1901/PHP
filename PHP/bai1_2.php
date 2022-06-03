<?php
    $noi_dung= "";
    $mau_chu= "";
    $mau_nen= "";

    if(isset($_POST["noi_dung"]) && isset($_POST["mau_chu"]) && isset($_POST["mau_nen"])){
        $noi_dung = $_POST["noi_dung"];
        $mau_chu = $_POST["mau_chu"];
        $mau_nen = $_POST["mau_nen"];
    }
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bai_tap.css">

    </head>
    <body>
        <div class="container">
            
            <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend>Định màu chữ - màu nền</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4">
                            nội dung
                        </div>
                        <div class="col-sm-7">
                            
                            <input type="text" name="noi_dung" id="" class="form-control" value="<?php echo $noi_dung ?>">                        
                        </div>
                    </div> 
                    <div class="form-group">
                    <div class="col-sm-4">
                            Màu chữ
                        </div>
                        <div class="col-sm-7">
                           
                            <input type="text" name="mau_chu" id="" class="form-control" value="<?php echo $mau_chu ?>">                        
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-4">
                            Màu nền
                        </div>
                        <div class="col-sm-7">
                            
                            <input type="text" name="mau_nen" id="" class="form-control" value="<?php echo $mau_nen ?>">                        
                        </div>
                    </div>    
                    <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form>
            <div class="hien_thi" style="color:#<?php echo $mau_chu ?>; background-color:#<?php echo $mau_nen?>">
                <?php echo $noi_dung ?>
        </div>
    </body>
</html>