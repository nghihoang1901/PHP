<?php 
    $i = "";
    $phep_tinh = "";
    $ket_qua = "";

    if(isset($_POST["i"])){
        $i = $_POST["i"];

        for ($i = $i; $i <= 10 ; $i ++){           
            for ($j = 1; $j <= 10; $j++) {
                $phep_tinh = $i * $j;
                $ket_qua .="<table> <td> $i x $j = $phep_tinh </br> </td> </table>";
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
                        <legend>BẢNG CỬU CHƯƠNG</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            Cửu chương
                        </div>
                        <div class="col-sm-4">                           
                            <input type="text" name="i" id="input" class="form-control" value="<?php echo $i ?>">
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">In ra bảng cửu chương</button>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-10">
                            KẾT QUẢ
                        </div>
                        <div class="col-sm-10" readonly="true" style="font-size: 20px">
                            <lable ><?php echo $ket_qua ?></lable>
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>
