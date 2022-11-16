<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>


<?php
   if(isset($_GET['id']) && is_numeric($_GET['id'])){

     $row=getRow('cities' , 'city_id' , $_GET['id']);
     if($row){
        $sql="DELETE FROM `cities` WHERE `city_id`= '$row[city_id]'";
        $success_msg=insert_db($sql);
        header("refresh:1;url=".BURLA."cities");
     }else{
         header("location:".BURLA); 
     }
   }else {
             header("location:".BURLA); 
        }

require BL.'functions/mesages.php';

?>


<?php require BLA.'/inc/footer.php';  ?>