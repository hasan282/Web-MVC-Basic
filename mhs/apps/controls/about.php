<?php

class about extends Controller {

    public function index() {
        $data["title"] = "About Us";
        $this->pageView( "basic/header" , $data );
        $this->pageView( "about/main" , $data );
        $this->pageView( "basic/footer" );
    }

    public function intro($par) {
        echo "Haloo ".$par;
    }

}

?>