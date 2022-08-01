<?php

spl_autoload_register('classAutoloader');  //register autoload function
 


function classAutoloader($class_name)  //include classes from models, components
{  

    $arrays_path = array(
        '/models/',
        '/components/'

    );

    foreach ($arrays_path as $path) {
        $path = ROOT . $path . $class_name . '.php';

        if (is_file($path)) {
            include_once $path;
        }
    }
}
