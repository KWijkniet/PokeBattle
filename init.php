<?php
    /*
        Function Name: spl_autoload_register
        Function Doc: Catch request for class and load file based on that (using classname as filename)
        Function Variables: $class = (string) name of class that was requested
    */
    spl_autoload_register(function($class){
        require "classes/{$class}.php";
    });
?>
