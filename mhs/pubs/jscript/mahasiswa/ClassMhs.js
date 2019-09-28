class Mahasiswa {

    constructor( id, nama, nrp, email, jrs ) {
        this.id = id;
        this.nama = nama;
        this.nrp = nrp;
        this.email = email;
        this.jurusan = jrs;
    }

    getID() {
        return this.id;
    }

    getNama() {
        return this.nama;
    }

    getNRP() {
        return this.nrp;
    }

    getEmail() {
        return this.email;
    }

    getJurusan() {
        return this.jurusan;
    }

}