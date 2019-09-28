<?php

class About extends Controller {

    public function index() {
        $data['head'] = 'About';
        $this->view( 'template/header', $data );
        $this->view( 'about/index' );
        $this->view( 'template/footer' );
    }

}

?>