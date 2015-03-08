<html>
<head>
<meta charset="utf-8"/>
<title>Hello world</title>
<meta name="description" content="Tự học PHP | qDened"/>
<meta name="author" content="https://github.com/qdened-php/phpcoban"/>
<meta name="copyright" content="Copyright (c) 2015"/>
</head>
<body>
<h1> Ở bài này, chúng ta sẽ tìm hiểu về "Các kiểu dữ liệu" </h1>
<?php
# Kiểu dữ liệu Boolean [Đây là kiểu dữ liệu đơn giản nhất, nó trả về giá trị TRUE/FALSE (Đúng/Sai)]
$bool = TRUE; //Gán giá trị TRUE cho biến $bool
# Kiểu dữ liệu Integer [Đây là kiểu dữ liệu số nguyên, nó bao gồm các số âm và dương.VD ...,-3,-2,-1,0,1,2,3,...]
$inte = -6666; //Gán giá trị -6666 (âm sáu nghìn sáu trăm sáu mươi sáu) cho biến $inte
# Kiểu dữ liệu Float [Đây là kiểu dữ liệu số thực, nó bao gồm các số nguyên và các số thập phân. VD: 1,2,3.14,0.56...]
$flo = 3.14; //Gán giá trị 3.14 cho biến $flo
#Kiểu dữ liệu String [Đây là kiểu dữ liệu chuỗi, gồm các ký tự a,b,c...,z giống như Hello World chúng ta đã làm ở bài 1]
$str = "Hello Many World :))"; //Gán chuỗi Hello Many World :)) cho biến $str
  -> Để nối chuỗi, chúng ta dùng dấu chấm ( . ) VD: $str = "I love ".(1+2); //Kết quả: I Love 3
#Kiểu dữ liệu Array [Đây là kiểu mảng, nó chứa các phần tử có cùng kiểu dữ liệu]
$arr[0]="Apple";
$arr[1]="Samsung";
$arr[2]="BB";
?>
</body>
</html>
