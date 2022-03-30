<?php

namespace App\Controllers;

use \Core\View;
/**
 * Home controller
 * php version 8.0
 */

class Home extends \Core\Controller
{   
    /**
     * Show index page
     * @return void
     */
    public function indexAction(){
        View::render('Home/index.php',[
            'username'=>'ali',
            'friends'=>['badr','omer']
        ]);
    }
    
    protected function before(){}
    protected function after(){}
}