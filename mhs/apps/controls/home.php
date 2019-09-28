<?php

class home extends Controller {

    public function index() {
        $data["title"] = "Web Mahasiswa";
        $this->pageView( "basic/header" , $data );
        $this->pageView( "home/main" , $data );
        $this->pageView( "basic/footer" );
    }

}

?>