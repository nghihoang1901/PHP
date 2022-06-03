<?php 
    $canh_A= "";
    $canh_B= "";
    $canh_C= "";

    if(isset($_POST["canh_A"]) && isset($_POST["canh_B"])){
        $canh_A = $_POST["canh_A"];
        $canh_B = $_POST["canh_B"];
        $canh_C = sqrt(pow($canh_A, 2) + pow($canh_B, 2));
    }
?>


<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tính cạnh huyền tam giác vuông</title>
        <link rel="stylesheet" href="bai_tap.css">

        <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <div class="container">
            
            <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend>Cạnh huyền tam giác vuông</legend>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            cạnh A
                        </div>
                        <div class="col-sm-10">                           
                            <input type="text" name="canh_A" id="input" class="form-control" value="<?php echo $canh_A ?>" >                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            cạnh B
                        </div>
                        <div class="col-sm-10">                           
                            <input type="text" name="canh_B" id="input" class="form-control" value="<?php echo $canh_B ?>" >                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            cạnh C
                        </div>
                        <div class="col-sm-10">                           
                            <input type="text" name="" id="input" class="form-control" value="<?php echo $canh_C ?>" readonly = "true" >                           
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form>
            
        </div>
    </body>
</html>
