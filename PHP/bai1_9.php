<?php
    $toan = 0;
    $ly = 0;
    $hoa = 0;
    $diem_chuan = 20;
    $tong_diem = 0;
    $ket_qua_thi = "";

    if(isset($_POST["toan"]) && isset($_POST["ly"]) && isset($_POST["hoa"])){
        $toan = $_POST["toan"];
        $ly = $_POST["ly"];
        $hoa = $_POST["hoa"];

        $tong_diem = $toan + $ly + $hoa;
        
        if((($toan != 0) && ($ly != 0) && ($hoa != 0) && ($tong_diem > $diem_chuan))){
            $ket_qua_thi = "Đậu";
        }
        else{
            $ket_qua_thi = "Rớt";
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
                    <legend>KẾT QUẢ THI ĐẠI HỌC</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        Toán: 
                    </div>
                    <div class="col-sm-7">                            
                        <input type="number" name="toan" id="input" class="form-control" value="<?php echo $toan ?>">   

                    </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-4">
                        Lý: 
                    </div>
                    <div class="col-sm-7">                            
                        <input type="number" name="ly" id="input" class="form-control" value="<?php echo $ly ?>">   

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        Hóa:
                    </div>
                    <div class="col-sm-7">                            
                        <input type="number" name="hoa" id="input" class="form-control" value="<?php echo $hoa ?>">  

                    </div>       
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        Điểm chuẩn:
                    </div>
                    <div class="col-sm-7">                            
                        <input type="number" name="diem_chuan" id="input" class="form-control" value="<?php echo $diem_chuan ?>" readonly="true">                            
                    </div>                        
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                       Tổng điểm:
                    </div>
                    <div class="col-sm-7">                            
                        <input type="number" readonly="true" name="tong_diem" id="input" class="form-control" value="<?php echo $tong_diem ?>">
                                                     
                    </div>  
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                       Kết quả thi:
                    </div>
                    <div class="col-sm-7">                            
                        <input type="text" readonly="true" name="ket_qua_thi" id="input" class="form-control" value="<?php echo $ket_qua_thi ?>">
                                                     
                    </div>  
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Xem kết quả</button>
                    </div>
                </div>
            </form>
        </div>    
    </body>
</html>
