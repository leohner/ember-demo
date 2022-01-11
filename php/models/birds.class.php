<?php
    include_once "models/model.class.php";

    class Birds extends Model
    {
        public function get()
        {
            include_once "db/database.class.php";

            $db = new Database();

            $sql = "SELECT * FROM birds";

            $rs = $db->conn->query($sql);

            $data = $rs->fetchAll();


            $json = json_encode($data);

            $json = '{ "data": ' . $json . ' } ';

            header("Content-Type: application/json;");
            header("Access-Control-Allow-Origin: *");
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