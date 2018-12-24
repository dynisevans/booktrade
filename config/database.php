<?php
require_once "config.php";
class Database {
    protected $con;
    function __construct()
    {
        $this->con = mysqli_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME);
        if(!$con)
            die("Connect failed");
        else
        {
            $this->con->set_charset("utf8");
            date_default_timezone_set("Asia/Ho_Chi_Minh");
        }
    }

}

?>