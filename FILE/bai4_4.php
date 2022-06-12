<?php
    class san_pham{
        public $ten_hang, $so_luong, $don_gia;
        function __construct($ten_hang, $so_luong, $don_gia){
            $this->ten_hang = $ten_hang;
            $this->so_luong = $so_luong;
            $this->don_gia = $don_gia;
        }
        function tinh_tien(){
            $thanh_tien = 0;
            $thanh_tien = $this->so_luong * $this->don_gia;
            return $thanh_tien;
        }
        function xuat_ket_qua(){
            $thanh_tien = $this->so_luong * $this->don_gia;
            ?>
            <div class="xuat_kq">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>nội dung sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>tên hàng</td>
                        <td>số lượng</td>
                        <td>đơn giá</td>
                        <td>thành tiền</td>
                    </tr>
                    <tr>
                        <td><?= $this->ten_hang ?></td>
                        <td><?= $this->so_luong ?></td>
                        <td><?= $this->don_gia ?></td>
                        <td><?= $thanh_tien ?></td>
                    </tr>
                </tbody>
            </table>
            </div>
            <?php
        }
        
    }
    $kq = '';
    if(isset($_POST['ten_hang']) && isset($_POST['so_luong']) && isset($_POST['don_gia'])){
        $san_pham = new san_pham($_POST['ten_hang'],$_POST['so_luong'],$_POST['don_gia']);
        $kq = $san_pham->xuat_ket_qua();
        $thanh_tien = $san_pham->tinh_tien();
    
        if(isset($_POST['ten_file'])){
            $fw = fopen('file/' . $_POST['ten_file'], 'w');
            $table = 'tên hàng'. "\t". 'số lượng'. "\t" . 'đơn giá' . "\t   ". 'thành tiền'. "\n";
            fwrite($fw, $table);
            fclose($fw);

            $f = fopen('file/' . $_POST['ten_file'], 'a+');
            fwrite($f,$_POST['ten_hang']. "\t       " . $_POST['so_luong'] ."\t     ". $_POST['don_gia'] . "\t    " . $thanh_tien . "\n");
            fclose($f);
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
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        
        <form action="" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <legend>TẠO - GHI - ĐỌC FILE CÓ ĐỊNH DẠNG</legend>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        Tên file:
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="ten_file" id="input" class="form-control" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        Tên hàng:
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="ten_hang" id="input" class="form-control" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        Số lượng
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="so_luong" id="input" class="form-control" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        Đơn giá:
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="don_gia" id="input" class="form-control" value="" >
                    </div>
                </div>
        
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
        </form>
        <!-- <div>
            <?php echo $kq ?>
        </div> -->
    </div>
</body>
</html>