<?php
    $diem_HK1 = "";
    $diem_HK2 = "";
    $diem_trung_binh = "";
    $ket_qua = "";
    $xep_loai_hoc_luc = "";

    if(isset($_POST["diem_HK1"]) && isset($_POST["diem_HK2"])){
        $diem_HK1 = $_POST["diem_HK1"];
        $diem_HK2 = $_POST["diem_HK2"];

        $diem_trung_binh = ($diem_HK1 + $diem_HK2 * 2) / 3;

        if($diem_trung_binh < 5){
            $ket_qua = "Ở lại lớp";
            $xep_loai_hoc_luc = "Yếu";
        }
        else if(($diem_trung_binh >= 5)){
            $ket_qua = "Được lên lớp";
            if(($diem_trung_binh >= 5) && ($diem_trung_binh < 6.5)){
                $xep_loai_hoc_luc = "Trung bình";
            }
            else if(($diem_trung_binh >= 6.5) && ($diem_trung_binh < 8)){
                $xep_loai_hoc_luc = "Khá";
            }
            else{
                $xep_loai_hoc_luc = "Giỏi";
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
                    <legend>KẾT QUẢ HỌC TẬP</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        Điểm HK1: 
                    </div>
                    <div class="col-sm-7">                            
                        <input type="text" name="diem_HK1" id="input" class="form-control" value="<?php echo $diem_HK1 ?>">   

                    </div>
                </div>
                <div class="form-group">
                   <div class="col-sm-4">
                        Điểm HK2: 
                    </div>
                    <div class="col-sm-7">                            
                        <input type="text" name="diem_HK2" id="input" class="form-control" value="<?php echo $diem_HK2 ?>">   

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        Điểm trung bình:
                    </div>
                    <div class="col-sm-7">                            
                        <input type="text" readonly="true" name="diem_trung_binh" id="input" class="form-control" value="<?php echo $diem_trung_binh ?>">  

                    </div>       
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        Kết quả:
                    </div>
                    <div class="col-sm-7">                            
                        <input type="text" name="ket_qua" id="input" class="form-control" value="<?php echo $ket_qua ?>" readonly="true">                            
                    </div>                        
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                       Xếp loại học lực:
                    </div>
                    <div class="col-sm-7">                            
                        <input type="text" readonly="true" name="xep_loai_hoc_luc" id="input" class="form-control" value="<?php echo $xep_loai_hoc_luc ?>">
                                                     
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
