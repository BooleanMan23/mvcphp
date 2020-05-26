<?php 

    class About extends Controller {
        public function index($nama = "Aditya", $umur=22, $pekerjaan = "Programmer"){
            $data['nama'] = $nama;
            $data['umur'] = $umur;
            $data['pekerjaan'] = $pekerjaan;
            $data['title'] = "About";
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