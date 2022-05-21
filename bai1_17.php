<?php 
    $nhap_so = "";
    $phep_tinh="";
    $ket_qua = "";
    if(isset($_POST["nhap_so"])){
        $nhap_so = $_POST["nhap_so"];
        // echo "<table style='color: red'>";
        //     echo "<td style='padding: 10px; border: solid blue 2px'>";
        //     for ($i = 1; $i <= 10 ; $i ++) { 
        //         echo (($nhap_so." x ".$i." = ".($nhap_so * $i))."<br/>");
        //     }
        //     echo "</td>";
        // echo "</table>";
        for ($i = 1; $i <= 10 ; $i ++){
            $phep_tinh= $nhap_so * $i;
            $ket_qua .= "$nhap_so x $i = $phep_tinh </br>";
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

       
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="bai_tap.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                            <input type="text" name="nhap_so" id="input" class="form-control" value="<?php echo $nhap_so ?>">
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary">Thực hiện</button>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-10">
                            KẾT QUẢ
                        </div>
                        <div class="col-sm-10">
                            
                            <lable style="font-size: 18px"><?php echo $ket_qua ?></lable>
                            
                        </div>
                    </div>
            </form>
            
        </div>

        
    </body>
</html>

