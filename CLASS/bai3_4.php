<?php
    class nhan_vien{
        public $ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $luong_can_ban = 450000;

        function __construct($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $luong_can_ban){
            $this->ho_ten = $ho_ten;
            $this->ngay_sinh = $ngay_sinh;
            $this->gioi_tinh = $gioi_tinh;
            $this->ngay_vao_lam = $ngay_vao_lam;
            $this->he_so_luong = $he_so_luong;
            $this->so_con = $so_con;
            $this->tham_nien = $tham_nien;
            $this->luong_can_ban = $luong_can_ban;
        }

        function tro_cap(){
            return $this->so_con * 100000;
        }
        function tien_luong(){
            return $this->luong_can_ban * $this->he_so_luong;
        }
    }

    class nv_vp extends nhan_vien{
        public $so_ngay_vang, $dinh_muc_vang = 2, $don_gia_phat = 25000;
        function __construct($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $luong_can_ban = 450000, $so_ngay_vang, $dinh_muc_vang = 2, $don_gia_phat = 25000){
            parent::__construct($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $luong_can_ban);
            $this->so_ngay_vang = $so_ngay_vang;
            $this->dinh_muc_vang = $dinh_muc_vang;
            $this->don_gia_phat = $don_gia_phat;
        }

        function tien_phat(){
            if(($this->so_ngay_vang) > ($this->dinh_muc_vang)){
                return (($this->so_ngay_vang) - ($this->dinh_muc_vang))* 25000;
            }
            else{
                return 0;
            }
        }
        function tro_cap(){
            if($this->gioi_tinh == 1){
                return $this->so_con * 100000 * 1.2;
            }
            else{
                return $this->so_con * 100000;
            }
        }
        function tien_luong(){
            return $this->luong_can_ban * $this->he_so_luong - $this->tien_phat();
        }
    }

    class nv_sx{
        public $so_san_pham, $dinh_muc_san_pham=100, $don_gia_san_pham = 12000;
        function __construct($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $luong_can_ban, $so_san_pham, $dinh_muc_san_pham=100, $don_gia_san_pham = 12000){
            parent::__construct($ho_ten, $ngay_sinh, $gioi_tinh, $ngay_vao_lam, $he_so_luong, $so_con, $tham_nien, $luong_can_ban);
            $this->so_san_pham = $so_san_pham;
            $this->dinh_muc_san_pham = $dinh_muc_san_pham;
            $this->don_gia_san_pham = $don_gia_san_pham;
        }

        function tien_thuong(){
            if($this->so_san_pham > $this->dinh_muc_san_pham){
                return ($this->so_san_pham - $this->dinh_muc_san_pham) * $this->don_gia_san_pham * 0.05;
            }
            else if($this->so_san_pham < $this->dinh_muc_san_pham){
                return ($this->so_san_pham - $this->dinh_muc_san_pham) * $this->don_gia_san_pham * 0.01;
            }
        }
        function tro_cap($tang_ca){
            if($tang_ca == 1){
                return $this->so_con * 100000 + 200000;
            }
            else{
                return $this->so_con * 100000;
            }
        } 
        function tien_luong(){
            $this->so_san_pham * $this->don_gia_san_pham + $this->tien_thuong();
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
    <link rel="stylesheet" href="bai_tap.css">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>Quản lý nhân viên</legend>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    <label>Họ và tên:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
                <div class="col-sm-2">
                    <label>Số con:</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    <label>ngày sinh:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
                <div class="col-sm-2">
                    <label>Ngày vào làm:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    <label>Giới tính:</label>
                </div>
                <div class="col-sm-2" id="gioi_tinh">
                    <input type="radio" name="" id="input" class="form-control" value="" >
                    <label>nam</label>
                </div>
                <div class="col-sm-2" id="gioi_tinh">
                    <input type="radio" name="" id="input" class="form-control" value="" >
                    <label>nữ</label>
                </div>
                <div class="col-sm-2">
                    <label>Hệ số lương:</label>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    <label>Loại nhân viên:</label>
                </div>
                <div class="col-sm-3" id="loai_nv">
                    <input type="radio" name="" id="input" class="form-control" value="" >
                    <label>Văn phòng</label>
                </div>
                <div class="col-sm-3" id="loai_nv">
                    <input type="radio" name="" id="input" class="form-control" value="" >
                    <label>Sản xuất</label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                    <label>Số ngày vắng:</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
                <div class="col-sm-2">
                    <label>Số sản phẩm:</label>
                </div>
                <div class="col-sm-2">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
                <div class="col-sm-4" id="tang_ca">
                    <label>Tăng ca:</label>
                    <input type="radio" name="" id="input" class="form-control" value="" >
                    <label>có</label>
                    <input type="radio" name="" id="input" class="form-control" value="" >
                    <label>không</label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-2">
                        <label>Tiền lương:</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
                <div class="col-sm-2">
                        <label>Trợ cấp:</label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="" id="input" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group" id="thuc_linh">
                <div class="col-sm-3">
                        <label>Thực lĩnh:</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="" id="input" class="form-control" value="" >
                    </div>
            </div>
    
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Tính lương</button>
                </div>
            </div>
        </form>
    </div>
    
    
</body>
</html>