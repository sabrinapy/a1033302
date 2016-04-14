<html>

<head>
	<title>登入完成</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<?php
if (isset($_POST["account"])) {
	$account=$_POST["account"];
	$pwd=$_POST["pwd"];

$Link=mysqli_connect("localhost","root","123456","sabrina");
mysqli_query($link,"set name utf8");

$read="SELECT * FROM a";
$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>帳號</td><td>密碼</td><td>email</td><td>電話</td><td>登入次數</td><td>上一次登入時間</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td>";
	echo "<td><a href='update.php?no=".$result[0]."'>修改</a></td>";
	echo "</tr>";
}
	echo "</table>";

	echo $account."歡迎回來";
	echo "您的上一次登入時間為".$result[5];
	echo "您的登入次數為".$result[4];
}
?>
</body>
</html>