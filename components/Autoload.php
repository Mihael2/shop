<?php

spl_autoload_register('classAutoloader');



function classAutoloader($class_name){

    $arrays_path = array(
        '/models/',
        '/components/'

    );

    foreach($arrays_path as $path){
        $path = ROOT . $path . $class_name . '.php';

        if(is_file($path)){
            include_once $path;
        }
    }

    spl_autoload_register('classAutoloader');
    
}

?>