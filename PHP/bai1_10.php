<?php 
    $so_A = "";
    $so_B = "";

    if(isset($_POST["so_A"]) && isset($_POST["so_B"])){
        $so_A = $_POST["so_A"];
        $so_B = $_POST["so_B"];

        

        if($so_A == 0){
            if($so_B == 0){
                $nghiem = "Phương trình có vô số nghiệm";
            }
            else{
                $nghiem = "Phương trình vô nghiệm";
            }
        }
        else{ 
                $nghiem = (- $so_B) / $so_A;    
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
                    <legend>Form title</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        Phương trình
                    </div>
                    <div class="col-sm-2">                        
                        <input type="text" name="so_A" id="input" class="form-control" value="<?php echo $so_A ?>">
                    </div>
                    <div class="col-sm-2" style="margin: 8px -45px; ">
                        x +
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="so_B" id="input" class="form-control" value="<?php echo $so_B ?>"> 
                    </div>
                    <div class="col-sm-2" style="margin: 8px -45px; ">
                        = 0
                    </div>                                                   
                    
                </div>
                <div class="form-group">
                    <div class="col-sm-4">
                        Nghiệm
                    </div>
                    <div class="col-sm-7">                        
                        <input type="text" name="nghiem" id="input" class="form-control" value="<?php echo $nghiem ?>">                        
                    </div>
                </div>            
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Giải phương trình</button>
                    </div>
                </div>
            </form>
            
        </div>
        
    </body>
</html>
