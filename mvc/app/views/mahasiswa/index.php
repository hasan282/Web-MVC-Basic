<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= BASEURL; ?>">MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?= BASEURL; ?>">Home</a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
            <a class="nav-item nav-link active" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa <span class="sr-only">(current)</span></a>
        </div>
    </div>
</nav>

<div class="container text-center mt-3">
    <h1>Data Mahasiswa</h1>
</div>

<div class="container">
<div class="row">
<div class="col-lg">
    <h4 class="my-4">List Mahasiswa</h4>
    <button type="button" class="btn btn-primary my-3" id="addMahasiswa" data-toggle="modal" data-target="#addModal">Tambah Data</button>
    <?php Flasher::flash(); ?>
    <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ) : ?>
            <li class="list-group-item">
                <?= $mhs['nama']; ?>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin hapus?')">delete</a>
                <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="badge badge-secondary float-right ml-1" id="editMahasiswa" data-toggle="modal" data-target="#addModal">edit</a>
                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-info float-right ml-1">detail</a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<div class="col-lg"></div>
</div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addModalLabel">Tambah Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="form-group">
                <label for="namaMhs">Nama Mahasiswa</label>
                <input type="text" id="namaMhs" name="namaMhs" class="form-control" placeholder="Nama Mahasiswa">
            </div>
            <div class="form-group">
                <label for="nrpMhs">NRP</label>
                <input type="number" id="nrpMhs" name="nrpMhs" class="form-control" placeholder="NRP">
            </div>
            <div class="form-group">
                <label for="emailMhs">Email Address</label>
                <input type="email" id="emailMhs" name="emailMhs" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control">
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Administrasi">Administrasi</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-outline-primary" id="buttonSave">Tambah Mahasiswa</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
        </div>
    </div>
</div>
</div>