<nav class="navbar navbar-expand-lg navbar-dark bg-primary pt-0 ">
  <div class="container">
    <button class="navbar-toggler w-100" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav d-flex">
        <li class="nav-item {{($title === 'E - Learning') ? 'active' : '' }}">
          <a class="nav-link" href="/">Beranda</a>
        </li>
        <li class="nav-item dropdown {{($title === 'Silabus' || $title === 'RPP') ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Silabus & RPP
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/silabus/silabus">Silabus</a>
            <a class="dropdown-item" href="/silabus/rpp">RPP</a>
          </div>
        </li>
        <li class="nav-item dropdown {{($title === 'Folklore' || $title === 'Ciri Pengenal') ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Hakikat Folklore
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/hakikat-folklore">Folklore</a>
            <a class="dropdown-item" href="/hakikat-folklore/ciri-pengenal">Ciri Pengenal</a>
          </div>
        </li>
        <li class="nav-item dropdown {{($title === 'Cerita Rakyat' || $title === 'Jenis Cerita Rakyat') ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Hakikat Cerita Rakyat
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/hakikat-cerita-rakyat/cerita-rakyat">Cerita Rakyat</a>
            <a class="dropdown-item" href="/hakikat-cerita-rakyat/jenis-cerita-rakyat">Jenis-jenis Cerita Rakyat</a>
          </div>
        </li>
        <li class="nav-item dropdown {{($title === 'Tema' || $title === 'Tokoh dan Penokohan') ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Unsur Intrinsik
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/unsur-intrinsik/tema">Tema</a>
            <a class="dropdown-item" href="/unsur-intrinsik/tokoh-penokohan">Tokoh & Penokohan</a>
          </div>
        </li>
        <li class="nav-item dropdown {{($title === 'Nilai Moral' || $title === 'Nilai Tradisi' || $title === 'Nilai Keagamaan' || $title === 'Nilai Kesejarahan' || $title === 'Nilai Kepahlawanan') ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Nilai Edukatif
            </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/nilai-edukatif/nilai-moral">Nilai Moral</a>
            <a class="dropdown-item" href="/nilai-edukatif/nilai-tradisi">Nilai Tradisi</a>
            <a class="dropdown-item" href="/nilai-edukatif/nilai-keagamaan">Nilai Keagamaan</a>
            <a class="dropdown-item" href="/nilai-edukatif/nilai-kesejarahan">Nilai Kesejarahan</a>
            <a class="dropdown-item" href="/nilai-edukatif/nilai-kepahlawanan">Nilai Kepahlawanan</a>
          </div>
        </li>
        <li class="nav-item dropdown {{($title === 'Lembar Kerja') ? 'active' : '' }}">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Lembar Kerja
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Post Test</a>
            <a class="dropdown-item" href="#">Pre Test</a>
          </div>
        </li>
        <li class="nav-item {{($title === 'Penulis') ? 'active' : '' }}">
          <a class="nav-link" href="/penulis">Penulis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>