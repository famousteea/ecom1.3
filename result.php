<?php
require_once("function.php");
if($_POST){
    $name=$_POST['fname'];
    if (empty($name)){
    echo"</br>nom vide";
}else{
    echo"</br>Mon nom est :" .$name;
}
$namelength_isvalid=$namelength_isvalid($post['fname']);

echo'</br>';
var_dump($namelength_isvalid);
if (!$namelength_isvalid['isvalid']) {
    
}
}