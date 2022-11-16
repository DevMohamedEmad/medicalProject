<?php  require 'config.php';  ?>
<?php require BL.'functions/validate.php';?>

<?php $cities = getRows('cities') ; ?>
<?php $services = getRows('services') ; ?>

<?php

if(isset($_POST['submit'])){
  $order_email =$_POST["email"];
  $order_mobile =$_POST["mobile"];
  $order_notes =$_POST[ "notes"];
  $service_name =$_POST["service_name"];
  $city_name=$_POST["city_name"];
  
  $order_city_id = getRow('cities' , 'city_name' , $city_name)['city_id'];
  $order_service_id = getRow('services' , 'service_name' , $service_name)['service_id'];
  if(valid_email($order_email)){

    $sql= " INSERT INTO `orders`(`order_mobile`, `order_email`,
     `order_notes`, `order_service_id`, `order_city_id`)
     VALUES ('$order_mobile','$order_email','$order_notes','$order_service_id','$order_city_id');";
     $result=insert_db($sql);
     if($result){
      $success_msg="Your Request Sended Successfuly";
     }else{
      $error_msg= " Invalid Data";
     }

  }else{
       $error_msg= " Invalid E-mail";
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
    <link rel="stylesheet" href="<?php echo ASSETS; ?>css/style1.css" >

    <title>Home Page</title>
  </head>
  <!-- <body style="background:url(<?php echo ASSETS .'images/bg-1.jpg';?>)"> -->

       
        <div class="cont-main" >
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" style="width:800px;height:600px" >
        <?php  require(BL.'functions/mesages.php');  ?>
        <div class="load" >
           <div class="one"></div>
           <div class="two"></div>
           <div class="three"> </div>
        </div>
          <input type="email" placeholder="Email" name="email" required>
          <input type="text" placeholder="Mobile" name="mobile" required >
          <input type="text" placeholder="Notes" name="notes">
          <br>
          <label for="city" style="margin-left:50px;margin-top:10px">Choose a city:</label>
               <select id="city" name="city_name" required>
                   <?php foreach ($cities as $city) {?>
                     <option style="" value=<?php echo $city['city_name']  ?>><?php echo $city['city_name'] ?></option>
                    <?php } ?>
               </select>
          
               <label for="service">Choose a service:</label>
               <select id="service" name="service_name" required>
                   <?php foreach ($services as $service) {?>
                     <option value=<?php echo $service['service_name'] ?>><?php echo $service['service_name'] ?></option>
                    <?php } ?>
               </select>
          <input type="submit" class="submit" style="margin-left:40%;width:100px" name="submit">
          <!-- <button type="submit" name="submit" class="btn btn-success">Save</button> -->
        </form> 
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ASSETS; ?>/js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/popper.min.js" ></script>
    <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js" ></script>
  </body>
</html>