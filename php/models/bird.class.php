<?php
    include_once "models/model.class.php";

    class Bird extends Model
    {
        function __construct()
        {
        }

        public function get()
        {
            include_once "db/database.class.php";

            $db = new Database();

            $sql = "SELECT * FROM birds";

            $rs = $db->conn->query($sql);

            $data = $rs->fetchAll();

            $json = json_encode($data);

            print $json;
        }

        public function post() 
        {

        }

        public function delete()
        {
            
        }
    }
?>