<?php 

    class Home extends Controller {
        public function index(){
            $data['name'] = $this->model('User_model')->getUser();   
            $data['title'] = "Home Page";
            $data['css'] = "home.css";     
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        }
    }


?>