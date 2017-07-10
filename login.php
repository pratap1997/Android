<?php
$conn = mysqli_connect("localhost", "root", "root", "dbms");
$name = $_POST['username'];
$pass = $_POST['password'];
echo "Hello";
$query = "SELECT * FROM dbms_table";
$res = mysqli_query($conn, $query);
if($res)
{
	echo "YES";
	while($result = mysqli_fetch_array($res))
	{
		echo $result[1].$result[2];
	}
}
else
{
	echo "NO";
}
mysql_close($conn);
?>