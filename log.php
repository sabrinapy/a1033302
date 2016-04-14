<html>

<head>
	<title>登入</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<form action="" method="post">
請輸入帳號:<input type="text" name="account"><br/>
請輸入密碼:<input type="password" name="pwd"><br/>
<input type="submit" value="提交">
<input type="reset" value="重設">
</form>

<?php
ob_start();
session_start();
$Link=mysqli_connect("localhost","root","123456","sabrina");
mysqli_query($Link,"set name utf8");
$lasttime=new DateTime("now",new DateTimeZone('Asia/Taipei'));

if(isset($_POST["account"])){
	$account=$_POST["account"];
	$pwd=$_POST["pwd"];

$add="INSERT INTO a(lasttime) VALUE('$lasttime')";
mysqli_query($Link,$add);

$sql="SELECT * FROM a WHERE account='$account' AND pwd='$pwd'";
$result=mysqli_query($Link, $sql);
$rows=mysqli_num_rows($result);

if($rows){
	echo "Success";
	$_SESSION["check"]="yes";
	$_SESSION["account"]=$account;
	$_SESSION["pwd"]=$pwd;
	
	header('Location:index.php');
}else{
	echo "Failed, Will back to login page after 5 second";
	header('refresh:5');
}

}
?>
</body>
</html>