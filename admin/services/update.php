<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';?>



<?php

   if(isset($_POST['submit'])){
        $service_name=$_POST['name'];
        $service_id=$_POST['id'];

        if(check_length($service_name,3)){

              $row=getRow('services' , 'service_id' , $_POST['id']);
              if($row){

                $sql="UPDATE `services` SET `service_name`='$service_name' WHERE `service_id`='$service_id' ";
                $result=insert_db($sql);
                if($result){
                    $success_msg=$result;
                    header("refresh:1;url=".BURLA."services");
                    
                }else{
                    $error_msg="Error";
                    header("refresh:1;url=".BURLA."services/edit.php?id=$service_id");
                }
            }else{
                $error_msg="Please Enter Valid ID";
                header("refresh:1;url=".BURLA."services/edit.php?id=$service_id");
            }
            
        }else{
            $error_msg="Please Enter Valid City Must be Large";
            header("refresh:1;url=".BURLA."services/edit.php?id=$service_id");
        }
    }
    require BL.'functions/mesages.php';







?>



<?php require BLA.'/inc/footer.php';  ?>