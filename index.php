<?php
/**
 * Created by PhpStorm.
 * User: jrakk
 * Date: 4/8/2019
 * Time: 2:16 PM
 */

    // Turn on error reporting
    ini_set('display_error', 1);
    error_reporting(E_ALL);

    //require autoload file
    require_once ('vendor/autoload.php');

    // create an instance of the base class
    $f3 = Base::instance();

    // Turn on Fat-free error reporting
    $f3->set('DEBUG', 3);


    $f3->route('GET /', function()
    {
        echo "<h1>My practice</h1>";
        //echo "<a href='order'>Order a Pet</a>";
    });

    $f3->route('GET /', function($f3)
    {
        // set a f3 variable
        $f3->set('title', 'Practicing with Template');
        $view = new Template();
        echo $view->render("views/info.html");
    });


    // Run Fat-Free
    $f3->run();
