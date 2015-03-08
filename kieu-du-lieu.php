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
// Tạo mảng:
$arr[0]="Apple";
$arr[1]="Samsung";
$arr[2]="BB";
// -> In giá trị trong mảng ra, chúng ta sử dụng câu lệnh: 
print $arr[0]; // thì sẽ được kết quả là Apple
// Trong mảng, các phần tử được đánh số từ 0 chứ không phải là từ 1
// Các bạn cũng có thể tạo mảng bằng cú pháp:
$arr = Array("Apple","Samsung","BB"); // Để lấy giá trị theo các này chúng ta vẫn sử dụng câu lệnh như trên.
print $arr[1]; // Giá trị trả về sẽ là Samsung
//Ngoài  ra còn có mảng 1 chiều kết hợp.... nhưng mảng là 1 phần rất quan trọng trong PHP, vì vậy chúng ta sẽ tìm hiểu kỹ hơn về nó ở những phần sau.
#Kiểu dữ liệu Object [Cái này hơi khó nói, bạn sẽ rõ hơn khi học tới Lập trình hướng đối tượng], ví dự bên dưới bạn không cần hiểu cũng được
class foo{ //Tạo class tên là foo
function do_foo(){ //Tạo function tên là do_foo không có giá trị truyền vào (rỗng)
echo "Working..."; //In ra dòng chữ Working...
}
}
$bar = new foo; // Làm mới class foo và gán nó vào biến bar
$bar->do_foo(); //Biến bar được dùng trong function do_foo
#Kiểu dữ liệu Resource [Là một biến đặc biệt, chứa một tham chiếu đến một resource bên ngoài. Các resource được tạo ra và sử dụng bởi các hàm đặc biệt.]
#Kiểu dữ liệu NULL [Kiểu dữ liệu này được dùng để thể hiện một biến không có giá trị hoặc để kiểm tra giá trị rỗng]
?>
</body>
</html>
