$(document).ready(function() {

    $("#editMahasiswa").click(function(){
        $("#buttonSave").attr("class","btn btn-outline-success");
        $("#buttonSave").html("Ubah Data");
        $("#addModalLabel").html("Ubah Data Mahasiswa");
    });

    $("#addMahasiswa").click(function(){
        $("#buttonSave").attr("class","btn btn-outline-primary");
        $("#buttonSave").html("Tambah Mahasiswa");
        $("#addModalLabel").html("Tambah Data Mahasiswa");
    });

});