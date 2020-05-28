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

    public function detail($id){
        $data['title'] = "Friend Detail";
        $data['css'] = "home.css";
        $data['friend'] = $this->model('Friend_model')->getFriendById($id);
        $this->view('templates/header', $data);
        $this->view('friend/detail', $data);
        $this->view('templates/footer');
    }
}