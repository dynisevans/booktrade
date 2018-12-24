<?php
require_once 'views/view.php';
class view_user extends view {
    public function show_home()
    {
        include("views/layouts/home/index.html");
    }
}
?>