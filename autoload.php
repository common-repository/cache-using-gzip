<?php

function cugz_autoload($class_name)
{
    $namespace = 'CUGZ\\';

    if(strpos($class_name, $namespace) !== 0) return;

    $class_name = substr($class_name, strlen($namespace));

    $class_name = strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $class_name));

    $path = __DIR__ . '\\classes\\' . $namespace . 'class-cugz-' . $class_name;

    $file = preg_replace("~[\\\\/]~", DIRECTORY_SEPARATOR, $path) . '.php';

    if (file_exists($file)) {

        require_once $file;
        
    }
}