<?php

require_once 'controllers/controller_home.php';
$p = new controller_home();
$p->show_home();
$p->show_users();

?>