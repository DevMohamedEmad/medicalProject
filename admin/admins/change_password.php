<?php require_once('../../config.php');?>
<?php require BLA.'inc/header.php'; ?>
<?php require BL.'functions/validate.php';?>


<?php
           if(isset($_POST['submit'])){

              $id=$_SESSION['admin_id'];            
              $new_password= $_POST['new_password'];
              $old_password= $_POST['old_password'];

              if(isset($_POST['submit'])){
                  if(check_empty($new_password) and check_empty($old_password) ){
                        $check=getRow('admin', 'admin_id' , $id);
                        if($check){
                            $check_pasword=password_verify($old_password , $check['admin_password']); 
                            if( $check_pasword){

                                $password=password_hash($new_password,PASSWORD_DEFAULT);

                                $sql="UPDATE `admin` SET `admin_password`= '$password' WHERE `admin_id`= '$id' ";
                                $success_msg=insert_db($sql);

                            }else{
                                $error_msg="Your Password is wrong";
                            }
                        }else{
                            $error_msg="Your ID is wrong";

                        }
                    } else{
                    $error_msg="please write vaild values";
                  }

                }


            }
              
                    
                           
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/style.css" >

    <title>Dashboard | Login</title>
  </head>
  <body>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="border p-5" style="margin-left:400px;" >
           
               <div class="row">
                   <?php  require(BL.'functions/mesages.php');   ?>
                  
                   <div class="col-sm-12  ">
                        <h3 class="text-center p-3 text-white">Change Password </h3>
                    </div>
                    <div class="col-sm-6 offset-sm-3 ">
                        
                        <div class="form-group">
                            <label > Old-Password </label>
                            <input type="password" name="old_password" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label > New-Password </label>
                            <input type="password" name="new_password" class="form-control" >
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control btn btn-success"   >
                        </div>
                    </div>
                </div>
                
            </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>




  </body>
</html>