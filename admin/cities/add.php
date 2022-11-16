<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';?>


 <?php
   if(isset($_POST['submit'])){
        $city_name=$_POST['name'];
        if(check_length($_POST['name'],3)){
            $sql="INSERT INTO `cities`( `city_name`) VALUES ('$city_name');";
            $result=insert_db($sql);
            if($result){
               $success_msg="City Added Successfully";
            }else{
               $error_msg="Error";
            }
        }else{
            $error_msg="Please Enter Valid City";
    }
}
 ?>


<div class="col-sm-6 offset-sm-3 border p-3">
       <?php  require(BL.'functions/mesages.php');   ?>
        <h3 class="text-center p-3 bg-primary text-white">Add New City</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name Of City</label>
                <input type="text" name="name" class="form-control" >
            </div>
           
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>









<?php require BLA.'/inc/footer.php';  ?>