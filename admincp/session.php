<?php

session_start();
include_once("../include/config.php");

if(isset($_SESSION['ID']))
{

$sql=mysqli_query($conn,"select * from users where User_ID='$_SESSION[ID]' AND Role='admin'OR'writer'");


if(mysqli_num_rows($sql)!=1)

{
	header("Location:../index.php");

}




}

else

{


	header("Location:../index.php");
}









  ?>