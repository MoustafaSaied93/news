<?php 

include_once("inclu/header.php");

include_once("inclu/sidebar.php");

$msg='';


if(isset($_GET['id']))
{


  $SQL=mysqli_query($conn,"SELECT * FROM  category WHERE cat_id='$_GET[id]'");

  $CATE=mysqli_fetch_assoc($SQL);

}

if(isset($_POST['editcat']))
{


  $USQL=mysqli_query($conn,"UPDATE category SET cat_name='$_POST[categ]' WHERE cat_id='$_GET[id]'");

if(isset($USQL))

{
  echo '<script type="text/javascript">location.href = "category.php";</script>';


}

}
 ?>



        <div id="page-wrapper">


          <article class="col-lg-9" style="padding-top: 20px">
            <div class="row">
      
             <div class="col-md-4">
              <div class="panel panel-info">
                 <div class="panel-heading">
              تعديل التصنيف
                
              </div>

              <div class="panel-body">
              <form id="login-form" class="form" action=" " method="post">
                            
                    <div class="form-group">
                       <label for="username" class="text-info">اسم التصنيف</label><br>
                      <input type="text" name="categ" id="categ" class="form-control" value=" <?php 
                            echo $CATE['cat_name']; 
                            ?> " placeholder="ادخل اسم تصنيف جديد">
                            </div>
                           <hr>
                           <div class="form-group">
                            <?php 
                            echo $msg; 
                            ?>
                            <input  type="submit" class="btn btn-info" name="editcat" value="تعديل  التصنيف">
                             
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
