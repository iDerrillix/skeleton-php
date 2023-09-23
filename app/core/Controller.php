<?php
class Controller{
    public function model($model){
        require_once('../app/models/'.$model.'.php');
        return new $model();
    }

    /* 
    require or render the given view
    the passed data or array will be extracted to be their own variables instead of accessing them like an array
    */
    public function view($view, $data = []){
        extract($data);
        require_once('../app/views/'.$view.'.php');
    }
}