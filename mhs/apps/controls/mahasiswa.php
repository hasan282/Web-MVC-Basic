<?php

class mahasiswa extends Controller {

    public function index() {
        $data["title"] = "Data Mahasiswa";
        $data["model"] = $this->model("mdMahasiswa")->getAll();
        $this->pageView( "basic/header" , $data );
        $this->pageView( "mahasiswa/main" , $data );
        $this->pageView( "mahasiswa/withjson" , $data );
        $this->pageView( "basic/footer" );
    }

    public function get() {
        $data = array( "hasil" => $this->model("mdMahasiswa")->getAll() );
        print json_encode( $data );
    }

    public function new() {
        $data["title"] = "Tambah Data Baru";
        $this->pageView( "basic/header" , $data );
        $this->pageView( "mahasiswa/new" , $data );
        $this->pageView( "basic/footer" );
    }

}

?>