



<?php 
include("config.php");

if(isset($_POST['submit']))

{

$user=$_POST['user'];

$password=$_POST['password'];
 if(empty($user))
 {

echo ' <div class="alert alert-danger">
                ادخل اسم المستخدم او البريد الالكترونى
            </div>';


 }

 else if(empty($password))
{

echo ' <div class="alert alert-danger">
                ادخل كلمة المرور
            </div>';


}



}




 ?>