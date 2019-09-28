<?php

class Mahasiswa extends Controller {

    public function index(){
        $data['head'] = 'Mahasiswa';
        $data['mhs'] = $this->model('MahasiswaModel')->getAll();
        $this->view( 'template/header', $data );
        $this->view( 'mahasiswa/index', $data );
        $this->view( 'template/footer' );
    }

    public function detail( $id ) {
        $data['head'] = 'Mahasiswa';
        $data['mhs'] = $this->model('MahasiswaModel')->getMhsByID($id);
        $this->view( 'template/header', $data );
        $this->view( 'mahasiswa/detail', $data );
        $this->view( 'template/footer' );
    }

    public function tambah() {
        if ( $this->model('MahasiswaModel')->addMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header( 'location: ' . BASEURL . '/mahasiswa' );
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header( 'location: ' . BASEURL . '/mahasiswa' );
            exit;
        }
    }

    public function hapus( $id ) {
        if ( $this->model('MahasiswaModel')->deleteMahasiswa($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header( 'location: ' . BASEURL . '/mahasiswa' );
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header( 'location: ' . BASEURL . '/mahasiswa' );
            exit;
        }
    }

}

?>