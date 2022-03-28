<?php
namespace App\Controllers;
use \Core\View;
/**
 * Posts controller
 * php version 8.0
 */

class Catgery extends \Core\Controller
{   
    /**
     * Show index page
     * @return void
     */
    public $id;
    public $name;
    public $isActive;

    function __construct()
    {
        
    }
    public function indexAction(){
        View::render('Catgery/catgery.php',[
            'username'=>'ali',
            'friends'=>['badr','omer']
        ]);
    }

    function add(){

    }
    function edit(){
        
    }
    function delete(){
        
    }

 public function getDefaultAction(){
 
}
        /**
     * Show Add new post page
     * @return void
     */
    public function addNewAction(){
        echo "heloo add new post";
    }
    protected function before(){echo " loading";}
    protected function after(){echo " after";}
}