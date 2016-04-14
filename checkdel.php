<?php
$no=$_GET["no"];
$Link=mysqli_connect("localhost","root","123456","a");
$del="DELETE FROM user WHERE No=".$no;
mysqli_query($Link,$del);

$read="SELECT * FROM a";
$readresult=mysqli_query($Link,$read);
	echo "<table border='1'>";
	echo "<tr><td>帳號</td><td>刪除資料</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[0]."</td>";
	echo "<td><a href='del.php?no=".$result[0]."'>刪除資料</a></td>";
	echo "</tr>";
}
	echo "</table>";
?>