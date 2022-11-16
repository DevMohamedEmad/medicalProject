<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';?>



<?php
   if(isset($_POST['submit'])){
        $city_name=$_POST['name'];
        $city_id=$_POST['id'];

        if(check_length($city_name,3)){

              $row=getRow('cities' , 'city_id' , $_POST['id']);
              if($row){

                $sql="UPDATE `cities` SET `city_name`='$city_name' WHERE `city_id`='$city_id' ";
                $result=insert_db($sql);
                if($result){
                    $success_msg=$result;
                    header("refresh:1;url=".BURLA."cities/index.php");
                }else{
                    $error_msg="Error";
                    header("refresh:1;url=".BURLA."cities/edit.php?id=$city_id");
                }
            }else{
                $error_msg="Please Enter Valid ID";
                header("refresh:1;url=".BURLA."cities/edit.php?id=$city_id");
            }
            
        }else{
            $error_msg="Please Enter Valid City Must be Large";
            header( "refresh:1;url=".BURLA."cities/edit.php?id=$city_id");
        }
    }
    require BL.'functions/mesages.php';







?>



<?php require BLA.'/inc/footer.php';  ?>