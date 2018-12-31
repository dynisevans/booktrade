<?php
require "config/database.php";
class model_home extends Database {
    public function show_users() {
        $sm =  $this->con->prepare("SELECT * FROM account");
        $sm->execute();
        $result = $sm->get_result();
        return $result;
    }
}
?>