<?php 
    $nam_am = "";
    $nam_duong = "";
    $can= ["Canh ","Tân ","Nhâm ","Qúi ","Giáp ","Ất ","Bính ", "Đinh ","Mậu ","Kỷ "];
    $chi = ["Thân","Dậu","Tuất","Hợi","Tý",'Sửu','Dần','Mẹo','Thìn','Tỵ','Ngọ','Mùi'];

    if(isset($_POST["nam_duong"])){
        $nam_duong = $_POST["nam_duong"];
        $tinh_can = $nam_duong % 10;
        $tinh_chi = $nam_duong % 12;
        
        function doc_nam($nam_duong, $can_chi = 0){
            global $can;
            global $chi;
            if($can_chi == 1){
                return $can[$nam_duong];
            }
            else{
                return $chi[$nam_duong];
            }
        }
        $nam_am .= doc_nam($tinh_can,1). doc_nam($tinh_chi,0);
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
        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
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
