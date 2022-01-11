<?php

    abstract class Model
    {
        private $method;

        public function __construct()
        {
            $method = $_SERVER["REQUEST_METHOD"];

            if (method_exists("Model", $method))
            {
                $this->$method();
            }
        }

        public function setMethod(string $method) : void
        {
            $this->method = $method;
        }

        abstract function get();
        abstract function delete();
        abstract function post();
    }

?>