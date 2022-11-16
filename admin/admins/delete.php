<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>


<?php
   if(isset($_GET['id']) && is_numeric($_GET['id'])){

     $row=getRow('admin' , 'admin_id' , $_GET['id']);
     if($row){
        $sql="DELETE FROM `admin` WHERE `admin_id`= '$row[admin_id]'";
        $success_msg=insert_db($sql);
        header("refresh:1;url=".BURLA."admins");
     }else{
         header("location:".BURLA); 
     }
   }else {
             header("location:".BURLA); 
        }

require BL.'functions/mesages.php';

?>


<?php require BLA.'/inc/footer.php';  ?>