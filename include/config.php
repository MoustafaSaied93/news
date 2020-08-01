<meta charset="utf-8">

<?php 

$host='localhost';
$username='root';
$password='';
$DB_name='cms_system';

$conn=mysqli_connect($host,$username,$password,$DB_name);

mysqli_set_charset($conn,"utf8");

if(!$conn)
{

echo mysqli_connect_error("خطا فى عملية الاتصال").mysqli_connect_errno();
}

function Close_Db()
{
	global $conn;
	mysqli_close($conn);

}
 ?>

