<?php
    class Router
    {
        function __construct()
        { 
        }

        public function parseRoute()
        {
            $validPaths = ["get", "post", "put", "delete"];
            $uri        = $_SERVER["REQUEST_URI"];
            $uriArray   = explode("/", $uri); 

            $model  = "";

            if (isset($uriArray[1]))
            {
                $model = $uriArray[1];
            }

            if ($model != "")
            {
                $modelPath = "models/{$model}.class.php";

                if (file_exists($modelPath))
                {
                    include_once $modelPath;
                
                    $model = new $model();
                }
            }
        }

    }    
?>