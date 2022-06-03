<?php 
    // $mang =[1,2,3,4,5,6];
    // $ket_qua = explode(",", $mang);
    // echo "<pre>",print_r($ket_qua),"</pre>";
    // echo $chuoi = implode(" ",$ket_qua);
    // rsort($mang);
    // echo implode(" ",$mang);
    // $mang = [4, 6, 2, 22, 11];
    // rsort($mang);
  
    // foreach( $mang as $tang_dan) {
    // echo "$tang_dan <br>";
// }

// $student = [
//     "Phan Văn Cương",
    
//     "Nguyễn Văn Hoàng",
    
//     "Bùi Việt Đức",
// ];
    
//     unset($student['2']);
    
//     print_r($student); 
$chuoi_1 = "hoa,lan,cuc,truc";
$chuoi_2 = 'hung,hoang,cuc,lan';
$mang_1 = explode(",",$chuoi_1);
$mang_2 = explode(",",$chuoi_2);
$phan_1 = array_diff_key($mang_1, $mang_2);
echo "<pre>",print_r($phan_1),"</pre>";
?>