<?php

class mdMahasiswa {

    private $table = "mahasiswa";
    private $dbase;

    public function __construct() {
        $this->dbase = new Database;
    }

    public function getAll() {
        $sqlAll = "SELECT * FROM " . $this->table . " ORDER BY " . $this->table . ".nama ASC";
        $this->dbase->Query( $sqlAll );
        return $this->dbase->resultSet();
    }

    public function getMhsByID( $mhsID ) {
        $sqlMhs = 'SELECT * FROM ' . $this->table . ' WHERE id=:id';
        $this->dbase->Query( $sqlMhs );
        $this->dbase->bind( 'id', $mhsID );
        return $this->dbase->singleResult();
    }

    public function addMahasiswa( $data ) {
        $query = "INSERT INTO ".$this->table." VALUES ('', :nama, :nrp, :email, :jurusan)";
        $this->dbase->Query( $query );
        $this->dbase->bind( 'nama', $data['namaMhs'] );
        $this->dbase->bind( 'nrp', $data['nrpMhs'] );
        $this->dbase->bind( 'email', $data['emailMhs'] );
        $this->dbase->bind( 'jurusan', $data['jurusan'] );
        $this->dbase->executeQuery();
        return $this->dbase->countRows();
    }

    public function deleteMahasiswa( $id ) {
        $query = "DELETE FROM ".$this->table." WHERE id=:id";
        $this->dbase->Query( $query );
        $this->dbase->bind( 'id', $id );
        $this->dbase->executeQuery();
        return $this->dbase->countRows();
    }

}

?>