<?php
require_once('../../config.php');
require BLA.'inc/header.php';
require BL.'functions/validate.php';

   if(isset($_POST['submit'])){
     
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
     $admin_type= $_POST['admin_type'];

    if(check_empty($name) && check_empty($email) && check_empty($password)){

        if(valid_email($email)){

            $password=password_hash($password,PASSWORD_DEFAULT);

            $sql="INSERT INTO `admin`( `admin_name`, `admin_email`, `admin_password`, `admin_type`) 
            VALUES ('$name','$email','$password','$admin_type')";
            $success_msg=insert_db($sql);

        }else{
            $error_msg="write vaild email";
        }
    }
    else {
        $error_msg="Fill All Credintials";
    }
    
    require BL.'functions/mesages.php';
   }



?>

<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="text" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>
            <?php if($_SESSION['admin_type'] == 'super_admin'){ ?>
                <div class="form-group">
                    <input type="radio" name="admin_type"  id="admin" value="admin">
                    <label for= "admin">Admin </label>
                    <input type="radio" name="admin_type" id="super" value="super_admin">
                    <label for= "super" >Super-Admin </label>
               </div>
            <?php } ?>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>

<?php require BLA.'/inc/footer.php';  ?>