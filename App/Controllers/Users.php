<?php
namespace App\Controllers;
use \Core\View;
/**
 * Posts controller
 * php version 8.0
 */
class Users extends \Core\Controller{
    function __construct()
    {
        echo "<h1>inside Users php";
    }
    function index(){
        echo "<h1>inside index php";
    }
    function createUser(){

    }
    function showUser($id,$role,$status){
        echo "<h1>show of status users$role and the are aready $status</h1>";
        $user=$this->model("user");
        $user->insert($id);
        $userName=$user->select($id);
        $this->view("userView",$userName);
    }
    function editUser(){
        
    }
    function deleteUser(){
        
    }
}
 


?>