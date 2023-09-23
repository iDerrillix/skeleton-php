<?php

/* 
A class for utility functions
Do not need to instantiate to use functions, just require and do Functions::function_name()
*/
class Functions{

    /* 
    Dumps the value and stops execution of program afterwards
    Used for debugging
    */
    public static function dd($value){
        var_dump($value);
        die;
    }

    public static function show($value){
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }

    public static function base_path($value){
        return __DIR__.'/../'.$value;
    }
}