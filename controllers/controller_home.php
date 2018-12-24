<?php
require_once "controller.php";
class controller_home extends controller {
    public function show_home() {
        $this->load_view('user');
        $view = new view_user();
        $view->show_home();
    }
}
?>