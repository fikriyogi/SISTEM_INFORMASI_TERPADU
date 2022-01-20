<?php
//spl_autoload_register(function($className) {
//    $file = dirname(__DIR__) . '\\class\\' . $className . '.php';
//    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
//    echo $file;
//    if (file_exists($file)) {
//        include $file;
//    }
//});

spl_autoload_register(function($class){
    require_once __DIR__ . '/' .$class.'.php';
});