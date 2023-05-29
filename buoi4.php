<?php
//1.Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checkNumber ($n){
    if($n%2 == 0){
        echo "Số ".$n. " là số chẵn";
    }else{
        echo "Số ".$n. " là số lẻ";
    }
}
$n = 12;
echo checkNumber ($n);
echo "<br>";
//2.Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm thi giữa kỳ, điểm thi cuối kỳ.
//Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
//Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
//Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
//Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
//Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"
function academicRanking($medium, $mid, $end){
    $medium = ($mid * 0.3 + $end * 0.7);
    if ($medium >= 9.0){
        echo "Xuất sắc";
    }elseif (($medium >= 7.0) && ($medium < 9.0)){
        echo "Giỏi";
    }elseif (($medium >= 5.0) && ($medium < 7.0)){
        echo "Khá";
    }else{
        echo "Yếu";
    }
}
$medium = 0;
$mid = 10;
$end = 9;
$result = academicRanking($medium, $mid, $end);
echo $result;
echo "<br>";

//3.Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkYear ($n){
    if($n%2 == 0){
        echo "Năm nay ".$n. " là năm chẵn";
    }else{
        echo "Năm nay ".$n. " là năm lẻ";
    }
}
$n = 2023;
echo checkYear ($n);
echo "<br>";
//4.Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printNumber (){
    for($i=1; $i<=100; $i++){
        echo "$i ";
    }
}
$result = printNumber();
echo $result;
echo "<br>";
//5.Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
function showNumber (){
    for ($i = 1; $i <= 100; $i++){
        if ($i % 2 == 0){
            echo "<b> $i </b>";
        }
        else {
            echo "$i ";
        }
    }
}
$result = showNumber();
echo $result;
//6.Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
function printYear($nam){
    foreach($nam as $value){
        echo "$value \n";
    }
}
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
echo printYear($nam);
?>

