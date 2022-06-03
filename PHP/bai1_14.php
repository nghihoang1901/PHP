<?php 
    $nam_am = "";
    $nam_duong = "";
    $can= 0;
    $chi = "";

    if(isset($_POST["nam_duong"])){
        $nam_duong = $_POST["nam_duong"];
        // tính can    
        switch (($nam_duong % 10)) {
            case '0':
                $can = "Canh ";
                break;
            case '1':
                $can = "Tân ";
                break;
            case '2':
                $can = "Nhâm ";
                break;
            case '3':
                $can = "Qúi ";
                break;
            case '4':
                $can = "Giáp ";
                break;
            case '5':
                $can = "Ất ";
                break;
            case '6':
                $can = "Bính ";
                break;
            case '7':
                $can = "Đinh ";
                break;
            case '8':
                $can = "Mậu ";
                break;
            case '9':
                $can = "Kỷ ";
                break;
        }
        // tính chi    
        switch (($nam_duong % 12)) {
            case '0':
                $chi = "Thân";
                break;
            case '1':
                $chi = "Dậu";
                break;
            case '2':
                $chi = "Tuất";
                break;
            case '3':
                $chi = "Hợi";
                break;
            case '4':
                $chi = "Tý";
                break;
            case '5':
                $chi = "Sửu";
                break;
            case '6':
                $chi = "Dần";
                break;
            case '7':
                $chi = "Mẹo";
                break;
            case '8':
                $chi = "Thìn";
                break;
            case '9':
                $chi = "Tỵ";
                break;
            case '8':
                $chi = "Ngọ";
                break;
            case '9':
                $chi = "Mùi";
                break;
        }
        $nam_am = ($can.$chi);
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
                        <legend>TÍNH NĂM ÂM LỊCH</legend>
                    </div>
                    <div class="form-group" style="display: flex">
                        <div class="col_sm-6" style="margin-left: 15px; font-size: 18px">
                            Năm dương lịch
                        </div>
                        <div class="col-sm-5" style="margin-left: 70px; font-size: 18px">
                            Năm âm lịch                            
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="col-sm-4">                            
                            <input style="font-size: 20px" type="text" name="nam_duong" id="input" class="form-control" value="<?php echo $nam_duong ?>">
                        </div>
                        <div class="col-sm-2"> 
                        <button type="submit" class="btn btn-primary">=></button>
                        </div>
                        <div class="col-sm-4">                            
                            <input type="text" style="font-size: 20px" readonly="true" name="nam_am" id="input" class="form-control" value="<?php echo $nam_am ?>">
                        </div>
                    </div>
            </form>
            
        </div>
        
    </body>
</html>
