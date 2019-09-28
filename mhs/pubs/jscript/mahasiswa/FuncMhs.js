$(document).ready(function(){

    LoadMahasiswa();

    function LoadMahasiswa() {
        Mhs = new LoadMhs();
        var ThisURL = BaseURL + "/mahasiswa/get";
        $.ajax({
            url: ThisURL, dataType: "json",
            beforeSend: function(){
                $("#detail").html("Loading");
            },
            success: function(Res){
                var jsonValues = Res.hasil;
                var Loop = 0;
                $.each(jsonValues,function( kie, val ){
                    console.log( kie );
                    MhsData = new Mahasiswa( val.id, val.nama, val.nrp, val.email, val.jurusan );
                    Mhs.setData( Loop, MhsData );
                    Loop++;
                });
                ShowMahasiswa();
            },
            fail: function(){
                $("#coba").html("Data Mahasiswa Gagal Dimuat");
            }
        });
    }

    function ShowMahasiswa() {
        var Data = "<ul class='list-group'>";
        for (let mh = 0; mh < Mhs.length(); mh++) {
            Data += "<li class='list-group-item'><strong style='color:#757575'>" + Mhs.nama(mh);
            Data += "</strong><button id='" + mh + "' class='detail btn btn-sm btn-outline-info float-right'>";
            Data += "Detail</button></li>";
        }
        Data += "</ul>";
        $("#coba").html(Data);
        $(".detail").click(function(){
            var Param = this.id;
            DetailMahasiswa( Param );
        });
    }

    function DetailMahasiswa( Param ) {
        var Detail = "Nama : " + Mhs.nama(Param) + "<br>";
        Detail += "NRP : " + Mhs.nrp(Param) + "<br>";
        Detail += "Jurusan : " + Mhs.jurusan(Param) + "<br>";
        Detail += "Email : " + Mhs.email(Param);
        $("#detail").html(Detail);
    }

});