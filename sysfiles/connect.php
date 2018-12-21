<?php
require_once "config.php";

class connection {

    protected $con;
    function __construct()
    {
        $this->con = new mysqli(DBHOST,DBUSER,DBPASSWORD,DBNAME);
        $this->con->set_charset("utf8");
        if(!$this->con)
            die("Error!");
    }
}

?>