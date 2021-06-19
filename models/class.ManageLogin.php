<?php

class Managelogin {

    function __construct() {
        $db_connection = new DbConnection();
        $this->link = $db_connection->connect();
        return $this->link;
    }

    

}

?>