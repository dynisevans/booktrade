<?php
require_once "../Model/Model.php";
class Controller extends Model {

    function select()
    {
        $p = new Model();
        $result = $p->select();
        return $result;
    }
}
?>