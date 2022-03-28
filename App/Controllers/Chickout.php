<?php
namespace App\Controllers;
use \Core\View;

/**
 * Posts controller
 * php version 8.0
 */

class Chickout extends \Core\Controller
{   
    /**
     * Show index page
     * @return void
     */
    public function indexAction(){

        View::render('Ckickout/ckickout.php',[
            'username'=>'ali',
            'friends'=>['badr','omer']
        ]);

    }
    
    public function userAction(){

        echo "<br>heloo index User acation<br>";
        var_dump($_GET);

    }

        /**
     * Show Add new post page
     * @return void
     */
    public function addNewAction(){
        echo "heloo add new User";
    }
    // protected function before(){echo " before";}
    // protected function after(){echo " after";}
}