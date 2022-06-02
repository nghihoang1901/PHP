<?php 
    $_date ="";
    $_month = "";
    $_year = "";
    $_day = "";
    $_ket_qua = "";

        
    if(isset($_POST["date"]) && isset($_POST["month"]) && isset($_POST["year"])){
        $_date = $_POST["date"];
        $_month = $_POST["month"];
        $_year = $_POST["year"];

        $_day=date_create("$_date-$_month-$_year");
        $_ket_qua .= "Ngày " .$_date. " tháng ".$_month." năm ".$_year. " là ngày " .date_format($_day,"l");
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
                        <legend>TÌM THỨ TRONG TUẦN</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3 ">
                            Ngày/Tháng/Năm:
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="date" id="input" class="form-control" value="<?php echo $_date ?>">
                        </div>
                        <div class="col-sm-1">
                            /
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="month" id="input" class="form-control" value="<?php echo $_month ?>">
                        </div>
                        <div class="col-sm-1">
                            /
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="year" id="input" class="form-control" value="<?php echo $_year ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Tìm thứ trong tuần</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
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
