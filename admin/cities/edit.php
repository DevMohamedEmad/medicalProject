<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';?>


 <?php
   if(isset($_GET['id']) && is_numeric($_GET['id'])){

     $row=getRow('cities' , 'city_id' , $_GET['id']);
     if($row){
     }else{
         header("location:".BURLA); 
     }
   }else {
             header("location:".BURLA); 
        }
 ?>


<div class="col-sm-6 offset-sm-3 border p-3">
       <?php  require(BL.'functions/mesages.php');   ?>
        <h3 class="text-center p-3 bg-primary text-white">Edit City</h3>
        <form method="post" action="<?php echo BURLA . 'cities/update.php'?>">
        <!-- <form method="post" action="<?php //echo BURLA . 'cities/update.php?id='. $row['city_id'] ?>"> -->
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control"  value="<?php echo $row['city_name']; ?>">
                <input type="hidden" name="id" value="<?php echo $row['city_id']; ?>">
            </div>
           
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>









<?php require BLA.'/inc/footer.php';  ?>