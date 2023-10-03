
<?php
require_once("function.php");
var_dump($_GET);
if($_GET){
    $name=$_GET['fname'];
    if (empty($name)){
    echo"</br>nom vide";
}else{
    echo"</br>Mon nom est :" .$name;
}
/*
$namelength_isvalid=$namelength_isvalid($_GET['fname']);

echo'</br>';
var_dump($namelength_isvalid);
if (!$namelength_isvalid['isvalid']) {
    
}
*/
}
echo'</br>';
$nameToSalt = add_salt($_GET['fname']);
var_dump($nameToSalt);