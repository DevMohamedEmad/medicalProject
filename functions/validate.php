<?php


function check_empty($value){

    if(empty($value)){
        return false;
    }else {
        return true;
    }

}


function valid_email($value){

    if(filter_var($value , FILTER_VALIDATE_EMAIL)){
        
        return true;
    }
    else {
        return false;
    }
}


function sanitizeString($string)
{
    $string = trim($string);
    $string = filter_var($string,FILTER_SANITIZE_STRING);
    return $string;
}


function check_length($string , $length ){

    if(strlen(trim($string))<$length){

        return false;
    }
    else {
        return true;
    }
}






















?>