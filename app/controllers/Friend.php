<?php 

class Friend extends Controller {
    public function index(){
        $data['title'] = "Friend List";
        $data['css'] = "home.css";
        $data['friends'] = $this->model('Friend_model')->getAllFriend();
        $this->view('templates/header', $data);
        $this->view('friend/index', $data);
        $this->view('templates/footer');
    }
}