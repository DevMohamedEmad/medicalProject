<?php

$dsn= 'mysql:host=localhost;'; 
$user="MohamedEmad";
$password="MohamedEmad";

try{
    
    $conn=new PDO($dsn , $user ,$password); 
    $q_connect=" CREATE DATABASE IF NOT EXISTS medical;
         USE medical;
         CREATE TABLE IF NOT EXISTS cities (city_id INT(11) AUTO_INCREMENT PRIMARY KEY, city_name VARCHAR(255) , city_created_at timestamp);
         CREATE TABLE IF NOT EXISTS services (service_id INT(11) AUTO_INCREMENT PRIMARY KEY, service_name VARCHAR(255) , service_created_at timestamp);
         CREATE TABLE IF NOT EXISTS orders (order_id INT(11) AUTO_INCREMENT PRIMARY KEY,
         order_mobile VARCHAR(255) , order_email VARCHAR(255), order_notes VARCHAR(255),
          order_service_id int(11) ,order_city_id int(11) , order_created_at timestamp );
          CREATE TABLE IF NOT EXISTS  admin (admin_id INT(11) AUTO_INCREMENT PRIMARY KEY, admin_name VARCHAR(255),
          admin_email VARCHAR(255), admin_password VARCHAR(255) ,admin_type VARCHAR(255)
          , admin_created_at timestamp);";    
         $conn->exec($q_connect); // execute the query
}

catch(PDOException $e){

    die ('Failed '. $e->getMessage());
}

$conn=mysqli_connect('localhost',$user ,$password,'medical');


function insert_db($sql){

    global $conn;
    $result=mysqli_query($conn , $sql);
    if ($result) {
        return "Process Successfully";
    }else{
        return false;
    }
}


function getRow($table , $col_name , $value){
    global $conn;
    $sql="SELECT * FROM `$table` WHERE $col_name = '$value' ";
    $result=mysqli_query($conn , $sql);
    if($result){
        $row=[];
        if(mysqli_num_rows($result)>0){
          $row[]=mysqli_fetch_assoc($result);
          return $row[0];
        }
        
    }
    return false;

}

function getRows($table ){
    global $conn;
    $sql="SELECT * FROM `$table` ";
    $result=mysqli_query($conn , $sql);
    if($result){
        $rows=[];
        if(mysqli_num_rows($result)>0){
          
            while($row=mysqli_fetch_assoc($result)){

               $rows[]=$row;
            }
        
        } 
    }

    return $rows;

}
























?>