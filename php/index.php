<?php
    header("Access-Control-Allow-Origin: http://localhost:4200");
    include_once "router.class.php";

    $path = explode("/", $_SERVER["REQUEST_URI"]);

    $router = new Router();
    $router->parseRoute();

    return;

    $uri = $_SERVER["REQUEST_URI"];


    print "connecting to database...";
    

    $rs = $db->query("SELECT * FROM birds");

    $birds = $rs->fetchAll();

    foreach ($birds as $bird)
    {
        print $bird["id"];
    }
?>