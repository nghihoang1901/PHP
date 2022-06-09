<?php 
    class phep_tinh{
        public $so_thu_1, $so_thu_2;
        function __construct($so_thu_1, $so_thu_2){
            $this->so_thu_1 = $so_thu_1;
            $this->so_thu_2 = $so_thu_2;
        }

        function phep_cong(){
            return  $this->so_thu_1 + $this->so_thu_2;
        }
        function phep_tru(){
           return $this->so_thu_1 - $this->so_thu_2;
        }
        function phep_nhan(){
            return $this->so_thu_1 * $this->so_thu_2;
        }
        function phep_chia(){
            return $this->so_thu_1 / $this->so_thu_2;
        }
    }

    
    $ket_qua = "";

    if(isset($_POST["phep_tinh"])){
        if(isset($_POST["so_thu_1"],$_POST["so_thu_2"])){
            $phep_tinh = new phep_tinh($_POST["so_thu_1"], $_POST["so_thu_2"]);
            $ket_qua = phep_tinh($_POST["phep_tinh"], $phep_tinh);
        }
    }
    function phep_tinh($radio, $phep_tinh){
        switch ($radio) {
            case 'cong':
                return $phep_tinh->phep_cong();
                break;
            case 'tru':
                return $phep_tinh->phep_tru();
                break;
            case 'nhan':
                return $phep_tinh->phep_nhan();
                break;
            case 'chia':
                    return $phep_tinh->phep_chia();
                    break;
            default:
                # code...
                break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="bai_tap.css"> -->
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
    <form action="" method="POST" role="form">
            <legend>Form title</legend>
        
            <div class="form-group">
                <label for="">số thứ 1</label>
                <input type="text" class="form-control" name="so_thu_1" value="<?php echo (isset($_POST['so_thu_1']))?$_POST['so_thu_1']:''; ?>">
            </div>
            <div class="form-group">
                <label for="">số thứ 2</label>
                <input type="text" class="form-control" name="so_thu_2" value="<?php echo (isset($_POST['so_thu_2']))?$_POST['so_thu_2']:''; ?>">
            </div>
        
            <div>
                <label for="cong">Cộng</label>
                <input type="radio" name="phep_tinh" value="cong" <?php 
                                if(isset($_POST['phep_tinh'])){
                                    if($_POST['phep_tinh'] == 'cong'){
                                        echo 'checked="true"';
                                    }
                                }
                            ?> >
           
                <label for="tru">Tru</label>
                <input type="radio" name="phep_tinh" value="tru" <?php 
                                if(isset($_POST['phep_tinh'])){
                                    if($_POST['phep_tinh'] == 'tru'){
                                        echo 'checked="true"';
                                    }
                                }
                            ?> >
           
                <label for="nhan">Nhan</label>
                <input type="radio" name="phep_tinh" value="nhan" <?php 
                                if(isset($_POST['phep_tinh'])){
                                    if($_POST['phep_tinh'] == 'nhan'){
                                        echo 'checked="true"';
                                    }
                                }
                            ?> >
            
                <label for="chia">Chia</label>
                <input type="radio" name="phep_tinh" value="chia" <?php 
                                if(isset($_POST['phep_tinh'])){
                                    if($_POST['phep_tinh'] == 'chia'){
                                        echo 'checked="true"';
                                    }
                                }
                            ?> >
            </div>
        
            <div class="display"><?php echo $ket_qua?></div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>