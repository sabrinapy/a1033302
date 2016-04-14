<html>

<head>
	<title>修改</title>
</head>

<body>
<?php
$no=$_GET["no"];
$Link=mysqli_connect("localhost","root","123456","a");

$read="SELECT * FROM user WHERE No=".$no;
$readresult=mysqli_query($Link,$read);
$result=mysqli_fetch_array($readresult);

echo "<form action='' method='post'>";
echo "帳號:".$result[0]."<br/>";
echo "密碼:<input type='text' name='uPwd' value='".$result[1]."'><br/>";
echo "email:<input type='text' name='uPwd' value='".$result[2]."'><br/>";
echo "電話:<input type='text' name='uPwd' value='".$result[3]."'><br/>";
echo "<input type='submit' value='更新'>";
echo "<input type='reset'>";
echo "</form>";
echo "<a href='checkdel.php?no=".$result[0]."'>刪除資料</a>";
?>
</body>
</html>