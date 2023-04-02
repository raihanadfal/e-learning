@extends('layouts.master')
@section('content')
    
  <div class="jumbotron bg-light">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-12 col-sm-12">
        <h1 class="display-4">Cerita Rakyat</h1>
        <p class="lead">Cerita Rakyat adalah cerita yang berasal dari masyarakat dan berkembang dalam masyarakat pada masa lampau, juga menjadi ciri khas setiap bangsa yang memiliki kultur budaya yang beraneka ragam. </p>
        <hr class="my-4">
        <p>Pengembangan bahan pengayaan E - Learning berbasis Cerirta Rakyat Panjalu untuk mendukung gerakan literasi Sekolah</p>
        <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal" href="#" role="button">Tentang E -Learning</a>
      </div>
      <div class="col-12 col-lg-6 col-md-12 col-sm-12">
        <img src="{{asset('img/img-1.png')}}" alt="Cerita Rakyat Panjalu" width="500" class="img-fluid">
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <h4>E - Learning</h4>
              <p class="text-justify">Produk e-learning ini menggunakan jenis kajian struktural dan kajian tentang nilai yang terkandung dalam cerita rakyat dibatasi pada nilai edukatif (pendidikan) yang meliputi nilai moral, nilai adat, nilai agama, nilai sejarah, dan nilai kepahlawanan. Hasil penelitian ini menggunakan metode penelitian RnD. Penelitian dan Pengembangan atau Research and Development (R&D) adalah suatu proses atau langkah-langkah untuk mengembangkan suatu produk baru, atau menyempurnakan produk yang telah ada yang dapat dipertanggungjawabkan. Dengan proyek akhir membuat bahan pengayaan e-learning untuk mendukung gerakan literasi di sekolah. Adapun pengembangan bahan pengayaan e-learning berbasis cerita rakyat Panjalu di Kabupaten Ciamis dipandang dapat dilakukan untuk memenuhi tujuan tersebut. Adapun cerita dibuat dalam bentuk cerita bergambar atau komik. Penelitian yang berjudul Pengembangan Bahan Pengayaan E-Learning Berbasis Cerita Rakyat Panjalu Sebagai Pendukung Gerakan Literasi Sekolah (GLS) Untuk Siswa Sekolah Menengah Pertama (SMP) ini diharapkan diperoleh hasil penelitian atau produk akhir e-learning yang lebih lengkap dan mendalam.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection