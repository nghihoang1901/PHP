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

$student = [
    "Phan Văn Cương",
    
    "Nguyễn Văn Hoàng",
    
    "Bùi Việt Đức",
];

    
    
    
    
    // Xóa Bùi Việt Đức ra khỏi mảng $student
    
    unset($student['2']);
    
    print_r($student); 
?>