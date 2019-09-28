<script src="<?= BASEURL; ?>/jscript/mahasiswa.js"></script>
<script>
$(document).ready(function(){

    var DataLength = 0;

    <?php $loop = 0; foreach ( $data["model"] as $mhs ) : ?>
        DataLength += 1;
        Mahasiswa[<?= $loop; ?>] = new Mahasiswa(<?= $mhs["id"]; ?>,"<?= $mhs["nama"]; ?>","<?= $mhs["nrp"]; ?>","<?= $mhs["email"]; ?>","<?= $mhs["jurusan"]; $loop++; ?>");
    <?php endforeach; ?>

    ShowList();

    function ShowList() {
        var Data = "<ul class='list-group'>";
        for (let mhs = 0; mhs < DataLength; mhs++) {
            Data += "<li class='list-group-item'><strong style='color:#757575'>" + Mahasiswa[mhs].getNama();
            Data += "</strong><button id='" + mhs + "' class='detail btn btn-sm btn-outline-info float-right'>";
            Data += "Detail</button></li>";
        }
        Data += "</ul>";
        $("#coba").html(Data);
    }

    $(".detail").click(function(){
        var Param = this.id;
        var Detail = "Nama : " + Mahasiswa[Param].getNama() + "<br>";
        Detail += "Jurusan : " + Mahasiswa[Param].getJurusan() + "<br>";
        $("#detail").html(Detail);
    });

});
</script>