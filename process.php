<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die;
if($_POST){
   if($_POST['operator']=='+'){
    $sum = $_POST['num1'] + $_POST['num2'];
    echo $sum;
   }
   elseif($_POST['operator'] == '-'){
      $dif =  $_POST['num1'] - $_POST['num2'];
      echo $dif;
   }
   else{
      echo $_POST['num1'] * $_POST['num2'];
   }

}



?>