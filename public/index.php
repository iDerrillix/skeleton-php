<?php 
try{
    require_once('../app/init.php');

    

    // $app = new App;
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    // Functions::show($uri);
    $router->route($uri);
} catch(Exception $e){
 echo $e->getMessage();
}


