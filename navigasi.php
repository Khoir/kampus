<?php
session_start()
?>


<div class="container-md sticky-md-top" style="background-color:green ;">

    <header class="container-fluid">
        <div class="logo">
            <img src="/assets/img/satu.png">
        </div>
        <div class="header-right">
            <div class="logo-text"> Dinas Ketenagakerjaan</div>
            <div class="logo-text"> Sidoarjo</div>
        </div>
        <div class="clear-both"></div>
        <div>
            <form action="" method="POST">
                <input class="form-control me-2" size="5" type="text" name="keyword" autofocus placeholder="Masukan Kata Kunci" autocomplete="off">
                <button class="btn btn-outline-success bg-warning" type="submit" name="cari">Cari</button>
            </form>
        </div>

    </header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="podcast.php">Podcast</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Psikologi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pendidikan.php">Psikologi Pendidikan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="sosial.php">Psikologi Sosial</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="organisasi.php">Psikologi Organisasi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="agama.php">Psikologi Agama</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tasawuf
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="falsafi.php">Falsafi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="tarekat.php">Tarekat</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="syariah.php">Syariah </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="etika.php">Etika</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="estetika.php">Estetika</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tokoh
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="psikologi.php">Psikologi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="tasawuf.php">Tasawuf</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>

                    <li class="nav-item dropdown">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="post">New Post</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
</div>