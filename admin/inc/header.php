<?php 

if(!isset($_SESSION['admin_name'])){

    header("location:".BURLA."login.php");
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
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/master.css" >


    <title>Dashboard | Home Page</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BURLA?>">
                    <img src="<?php echo BURL."assets/images/logo.png" ?>" alt="done" style="width:50px;height:40px;"> <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA . "cities/add.php" ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA . "cities"?>">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA . "services/add.php" ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA . "services"  ?>">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <div class="order"></div>
                    Orders
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo BURLA . "orders"    ?>">View All</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Admins
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo BURLA.'admins/add.php' ?>">Add</a>
                        <a class="dropdown-item" href="<?php echo BURLA.'admins' ?>">View All</a>
                    </div>
                </li>


                <li class="nav-item " style="margin-left:600px;">
                    <a class="nav-link" href="<?php  ?>" target="_blank">Profile</a>
                </li>

                 

                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo BURLA."admins/change_password.php" ?>">Change-Password</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="<?php echo BURLA."logout.php" ?>">Logout</a>
                </li>

                

                

            </ul>

  </nav>



    <div class="container-fluid mt-5 mb-5">
        <div class="row"> 


        