<?php 
    class Buku extends Controller{

        public function index(){
            $data['id'] = $this->model('Buku_model')->getIdBuku();
            $this->view('templates/header');
            $this->view('buku/index', $data);
            $this->view('templates/footer');

        }

    }

?>