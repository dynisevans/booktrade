<?php
require_once "../sysfiles/connect.php";
class Model extends connection {
    protected function select()
    {
        $sql = "SELECT * FROM testtable";
        $result = $this->con->query($sql);
        return $result;
    }
}
?>