<?php
require "config/database.php";
class model_home extends Database {
    protected function get_test() {
        $sm =  $this->con->prepare("SELECT * FROM testtable");
        $result = $sm->execute();
    }
}
?>