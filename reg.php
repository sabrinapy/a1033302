<html>

<head>
	<title>註冊</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<h2>新增使用者資料</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="account"><br/>
請輸入密碼:<input type="password" name="pwd"><br/>
請輸入email:<input type="text" name="email"><br/>
請輸入電話:<input type="text" name="phone"><br/>
<input type="submit" value="提交">
<input type="reset" value="重設">
</form>

<?php
if (isset($_POST["account"])) {
	$account=$_POST["account"];
	$pwd=$_POST["pwd"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];

$Link=mysqli_connect("localhost","root","123456","sabrina");
mysqli_query($Link,"set name utf8");

$add="INSERT INTO a(account,pwd,email,phone) VALUE('$account','$pwd','$email','$phone')";
mysqli_query($Link,$add);

$read="SELECT * FROM a";
$readresult=mysqli_query($Link,$read);
	echo "<table border='1'>";
	echo "<tr><td>帳號</td><td>密碼</td><td>email</td><td>電話</td></tr>";
while ($result=mysqli_fetch_array($readresult)) {
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td>";
	echo "</tr>";
}
	echo "</table>";
}
?>

</body>
</html>