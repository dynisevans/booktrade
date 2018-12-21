<?php
require_once "../   Controller/Controller.php";
class View extends  Controller
{
    public function select()
    {
        $p = new Controller();
        $result = $p->select();
        while($rows = $result->fetch_assoc())
        {
            echo $rows.'<br>';
        }
    }
}
?>