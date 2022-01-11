<?php

    class Database
    {
        public $conn;

        function __construct()
        {
            $this->connect();
        }

        private function connect()
        {
            $this->conn = new PDO('sqlite:db/leohner.db');
        }
    }

?>