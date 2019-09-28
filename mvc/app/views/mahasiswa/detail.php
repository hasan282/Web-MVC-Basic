<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= BASEURL; ?>">MVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?= BASEURL; ?>">Home</a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h3><?= $data['mhs']['nama']; ?></h3>
    <p><?= $data['mhs']['nrp']; ?></p>
    <p><?= $data['mhs']['jurusan']; ?></p>
    <p><?= $data['mhs']['email']; ?></p>
</div>

<div class="container mt-5">
    <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-outline-primary">Back</a>
</div>