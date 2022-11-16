<?php require '../../config.php';  ?>
<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';?>



<?php

    if(isset($_POST['submit'])){

     $name=$_POST['name'];
     $id=$_POST['id'];
     $email=$_POST['email'];

     if(check_empty($name) && check_email($email)){
        
        
     }
    }

















    require BL.'functions/mesages.php';







?>



<?php require BLA.'/inc/footer.php';  ?>