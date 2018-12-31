<?php
require_once "controller.php";
class controller_home extends controller {
    public function show_home() {
        $this->load_view('home');
        $view = new view_home();
        $view->show_home();
    }

    public function get_users() {
        $this->load_model('home');
        $model = new model_home();
        return $model->show_users();
    }

    public function show_users() {
        $this->load_view('home');
        $view = new view_home();
        $view->show_users();
    }
}
?>