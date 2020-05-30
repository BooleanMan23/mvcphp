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

    public function add(){
        if($this->model('Friend_model')->addFriend($_POST) > 0){
            Flasher::setFlash('success', 'add friend', 'success');
            header('Location: '. BASEURL . '/friend');
            exit;
        } else {
            Flasher::setFlash('fail', 'add friend', 'danger');
            header('Location: '. BASEURL . '/friend');
            exit;
        }
    }

    public function delete($id){
        if($this->model('Friend_model')->deleteFriend($id) > 0){
            Flasher::setFlash('success', 'delete friend', 'success');
            header('Location: '. BASEURL . '/friend');
            exit;
        } else {
            Flasher::setFlash('fail', 'delete friend', 'danger');
            header('Location: '. BASEURL . '/friend');
            exit;
        }
    }
    
}