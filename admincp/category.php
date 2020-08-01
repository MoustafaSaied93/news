<?php 

include_once("inclu/header.php");

include_once("inclu/sidebar.php");

$msg='';
$msg2='';



if(isset($_POST['addcat']))
{
  $category=$_POST['categ'];

if(empty($category))
{
$msg='<div class="alert alert-danger">
       
        <strong> من فضلك ادخل  اسم التصنيف</strong>
    </div>';


}
else
{
  $insert=mysqli_query($conn,"INSERT INTO category(cat_name) VALUES ('$category')");

  if(isset($insert))
  {

$msg='<div class="alert alert-success">
       
        <strong> تم الادخال  بنجاح<strong>
    </div>'; 

  }

 if(isset($_GET['id']))
  {
    $DEL=$_GET['id'];

    $deletecolumn=mysql_query($conn," DELETE FROM category WHERE cat_id ='$DEL'");

    $msg2='<div class="alert alert-success">
       
        <strong> تم الحذف بنجاح </strong>
        </div>'; 

    if(isset($deletecolumn))
    {

$msg2='<div class="alert alert-success">
       
        //<strong> تم الحذف بنجاح </strong>
        //</div>'; 

    }



  }


}


}





 ?>



        <div id="page-wrapper">


          <article class="col-lg-9" style="padding-top: 20px">
            <div class="row">
            <div class="col-md-8">
               <?php 
                echo $msg2; 
                            ?>
            <div class="panel panel-info">
              <div class="panel-heading">
               التصنيفات
                
              </div>

              <div class="panel-body">
               
               <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>اسم التصنيف</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                  </tr>

                </thead>
                <tbody>
                  <?php
                  $cat= mysqli_query($conn, "SELECT * FROM category");
                  $num=1;
                  while ( $category=mysqli_fetch_assoc($cat)) {

                    $catname=$category['cat_name'];
                    $catid=$category['cat_id'];
                    echo ' <tr>
                    <td>'. $catid.'</td>

                    <td>'.$catname.'</td>
                   

                    <td><a href="editcateg.php?id='.$catid.'" class="btn btn-warning btn-xs"> تعديل</a></td>
                   

                   <td><a href="category.php?id='.$catid.'" class="btn btn-danger btn-xs" >حذف</a></td>

                  </tr>';
                  }







                    ?>
                 


                </tbody>
                 


               </table>
              </div>


            </div>
             </div>

             <div class="col-md-4">
              <div class="panel panel-info">
                 <div class="panel-heading">
              اضافة تصنيف جديد
                
              </div>

              <div class="panel-body">
              <form id="login-form" class="form" action=" " method="post">
                            
                    <div class="form-group">
                       <label for="username" class="text-info">اسم التصنيف</label><br>
                      <input type="text" name="categ" id="categ" class="form-control" placeholder="ادخل اسم تصنيف جديد">
                            </div>
                           <hr>
                           <div class="form-group">
                            <?php 
                            echo $msg; 
                            ?>
                            <input  type="submit" class="btn btn-info" name="addcat" value="اضافة تصنيف">
                             
                           </div>
                        </form>
              </div>

                
              </div>
               
             </div>

           </div>


          </article>

            <!-- /.row -->
     

<?php 

include_once("inclu/footer.php");

 ?>
