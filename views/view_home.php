<?php
require_once 'views/view.php';
require_once 'controllers/controller_home.php';
class view_home extends view {
    public function show_home()
    {
        include("views/layouts/home/index.html");
    }

    public function show_users()
    {
        $p = new controller_home();
        $result = $p->get_users();
        while($info = $result->fetch_assoc())
        {
            echo $info['ID'].' | '.$info['Email'].' | '.$info['LastName'].' '.$info['FirstName'].'<br>';
        }
    }
}
?>