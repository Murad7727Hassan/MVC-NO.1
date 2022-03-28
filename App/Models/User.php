<?php
class User{
function insert(){
    echo "insers function model";
}
function select($id){
    $allUser=array('mamkm','asasa',"sasa","asasa");
     if($id>sizeof($allUser)-1)
    return "incorrect user id ";
    return $allUser[$id];
}
}

?>