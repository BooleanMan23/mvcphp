<?php 

    class About extends Controller {
        public function index($name = "Aditya", $age=22, $occupation = "Programmer"){
            $data['name'] = $this->model('User_model')->getUser();      
            $data['age'] = $age;
            $data['occupation'] = $occupation;
            $data['title'] = "about Page";
            $data['css'] = "about.css";     
            $this->view('templates/header', $data);
            $this->view('about/index', $data);
            $this->view('templates/footer');
          }

          public function page(){
              $data['title'] = "About Page";
              $data['css'] = "about.css";
              $this->view('templates/header', $data);
              $this->view('about/page');
              $this->view('templates/footer');
          }



        

      

         
    }


?>