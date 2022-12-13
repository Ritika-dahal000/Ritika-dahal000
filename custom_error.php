<?php
//custom error
function customError($errorno,$errstr){
    echo "<b>Error:[$errorno] $errstr</b>";
}
set_error_handler("customError");
// echo($test);
function checkNum($number){
    if($number < 1){
        throw new Exception("cannot be less than 0");
    }
}

try{
    checkNum(0);
    // echo "This number is less than 0";
}
catch(Exception $e){
    echo "Number cannot be less than 0";
}
?>