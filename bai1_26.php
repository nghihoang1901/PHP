<?php
    $_first= "";
    $_second = "";
    $_ket_qua = "";

    if(isset($_POST["first"]) && isset($_POST["second"])){
        $_first = $_POST["first"];
        $_second = $_POST["second"];
        if(strcmp($_first, $_second ) == 0){
            $_ket_qua ="Hai chuỗi giống nhau";
        } 
        else if(strcmp($_first, $_second ) != 0){
            if($_first < $_second)
                $_ket_qua ="Chuỗi thứ nhất ngắn hơn chuỗi thứ hai";
            else{
                $_ket_qua ="Chuỗi thứ nhât dài hơn chuỗi thứ hai";
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
                        <legend>SO SÁNH CHUỖI</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            Chuỗi thứ nhất:
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="first" id="input" class="form-control" value="<?php echo $_first ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            Chuỗi thứ hai:
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="second" id="input" class="form-control" value="<?php echo $_second ?>">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">So sánh</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            
                        </div>
                        <div class="col-sm-8">
                            <input type="text" style="color: red" readonly="true" name="ket_qua" id="input" class="form-control" value="<?php echo $_ket_qua ?>">
                        </div>
                    </div>
            </form>
            
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
