<?php
//error reporting
ini_set('display_errors', 1);
ini_set('file_uploads',1);
error_reporting(E_ALL);
//instantiate fat free and session
$f3 = Base::instance();
session_start();

//default route
$f3->route('GET|POST /', function ($f3) {

    $view = new Template();
    echo $view->render('html5up-stellar/views/index.html');
});
