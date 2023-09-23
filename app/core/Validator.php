<?php

/* 
A simple validator class
All functions inside of this class are static functions
Require this class and call a function by Validator::function_name($params);
You do not need to instantiate the class if you put static to the function and required the class
*/
Class Validator{

    /* 
    Checks if input value is greater or equal to the minimum length of characters and lesser or equal to the maximum length of characters
    Also eliminates white spaces (trim)
    */
    public static function input($value, $min = 1, $max = INF){
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    /* 
    Validates if the email given is valid or not
    Checks if the value is in email format (email@domain.com)
    Returns false if not valid, returns the value if valid (use it to check if value is not valid (!Validator::email($value)))
    */
    public static function email($value){
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}