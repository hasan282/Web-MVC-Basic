class LoadMhs {

    Data = []
    DataLength = 0;

    setData( array, data ) {
        this.Data[array] = data;
        this.DataLength += 1;
    }

    length() {
        return this.DataLength;
    }

    id( list ) {
        var DataID = this.Data[list].getID();
        return DataID;
    }

    nama( list ) {
        var DataNama = this.Data[list].getNama();
        return DataNama;
    }

    nrp( list ) {
        var DataNRP = this.Data[list].getNRP();
        return DataNRP;
    }

    email( list ) {
        var DataEmail = this.Data[list].getEmail();
        return DataEmail;
    }

    jurusan( list ) {
        var DataJR = this.Data[list].getJurusan();
        return DataJR;
    }

}