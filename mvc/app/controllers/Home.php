<?php

class Home extends Controller {

    public function index() {
        $data['head'] = 'Home';
        $data['nama'] = $this->model('UserModel')->getNama();
        $this->view( 'template/header', $data );
        $this->view( 'home/index', $data );
        $this->view( 'template/footer' );
    }

}

?>