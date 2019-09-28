<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="<?= BASEURL; ?>">
        <img src="<?= BASEURL; ?>/pict/anicon.png" width="30" height="30" alt="Web Mahasiswa">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <a href="<?= BASEURL; ?>/login" class="btn btn-outline-info my-2 my-sm-0"><i class="fa fa-bars"></i> Login</a>
    </form>
</div>
</div>
</nav>