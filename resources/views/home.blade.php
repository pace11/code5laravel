@extends('template')
@section('contentWebsite')
<header class="masthead text-center text-white d-flex">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <img src="{{ URL::asset("img/logo-putih.png") }}" alt="logo-code5" width="60%">
                <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Solusi bagi anda dalam membangun Aplikasi Berbasis Web maupun Mobile dengan mentoring dan P  emanfaatan Teknologi</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Siapa Kami ?</a>
            </div>
        </div>
    </div>
</header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Kami selalu siap membantu</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Kami bersepakat untuk siap dalam membantu semua kebutuhan anda. dengan memperkenalkan aplikasi yang menunjang dan memberikan arahan karena
            menurut kami kepuasan anda adalah tanggung jawab kami.
            </p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Servis Kami</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Servis kami</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-brain text-primary mb-3 sr-icon-1"></i>
              <h3 class="mb-3">Creative</h3>
              <p class="text-muted mb-0">Memanfaatkan ide kreatif untuk membangun produk yang sesuai dengan keinginan anda</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-award text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Objective</h3>
              <p class="text-muted mb-0">Objektif dalam membangun produk dengan kebutuhan yang sesuai</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Developtive</h3>
              <p class="text-muted mb-0">Membangun produk dengan dasar pemrograman yang memiliki standar baik</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-book text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Educative</h3>
              <p class="text-muted mb-0">Memberikan pengajaran yang baik kepada anda mengenai produk yang sedang dikerjakan</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Portofolio</h2>
              <hr class="my-4">
            </div>
          </div>
      </div>
      <div class="container">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  PA-CHAT (CHATBOT KRS STT PLN)
                </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img src="{{ URL::asset("img/portfolio/apps/1.jpg") }}" alt="..." class="img-thumbnail">
                  </div>
                  <div class="col-md-8">
                    <ul>
                      <li><b><h4>Deskripsi : </h4></b>
                      Aplikasi Chatbot/mesin penjawab otomatis yang mampu memberikan jawaban seputar KRS dan Matakuliah tiap jurusan di STT PLN Jakarta.
                      </li>
                    </ul>
                    <ul>
                      <li><b><h4>Bahasa & Metode : </h4></b>
                      PHP, AJAX, PYTHON, MYSQL -> Menggunakan Metode TF-IDF, Cosine Similarity.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  SI-RENDI PLN UDIKLAT
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img src="{{ URL::asset("img/portfolio/apps/2.png") }}" alt="..." class="img-thumbnail">
                  </div>
                  <div class="col-md-8">
                    <ul>
                      <li><b><h4>Deskripsi : </h4></b>
                      Aplikasi Si-Rendi (Sistem Informasi Rencana Diklat) UDIKLAT PLN adalah aplikasi perencanaan kegiatan dan pelatihan di UDIKLAT PLN. Aplikasi ini bertujuan untuk membantu
                      pembagian jadwal yang terkadang masih dilakukan secara manual. Dengan aplikasi ini membantu UDIKLAT merencakan Diklat pelatihan, Intstruktur yang bertugas, ruangan yang
                      tersedia dan kapasitas kelas.
                      </li>
                    </ul>
                    <ul>
                      <li><b><h4>Bahasa & Metode : </h4></b>
                      PHP, AJAX, MYSQL -> Menggunakan Metode Penjadwalan Sederhana.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  PLN BOOKING
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img src="{{ URL::asset("img/portfolio/apps/3.png") }}" alt="..." class="img-thumbnail">
                  </div>
                  <div class="col-md-8">
                    <ul>
                      <li><b><h4>Deskripsi : </h4></b>
                      Aplikasi PLN BOOKING adalah aplikasi yang mempertemukan Mitra PLN dengan Petugas PLN gunanya untuk menyelesaikan permasalahan yang dialami oleh Mitra PLN. Mitra PLN cukup
                      melakukan pendaftaran Akun baru setelahnya dapat melaporkan permasalahan yang dialami. Saat itu juga Petugas akan menerima Notifikasi dan langsung menuju ke lokasi Mitra PLN yang mengalami 
                      permasalahan tersebut. Pembayaran dapat dilakukan secara Realtime menggunakan Payment Gateway yang terhubung di Bank Nasional, Indomaret dll.
                      </li>
                    </ul>
                    <ul>
                      <li><b><h4>Bahasa & Metode : </h4></b>
                      PHP, Javascript, MYSQL -> Menggunakan Payment Gateway dari Midtrans
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Anda siap untuk <b>BERGABUNG</b> !</h2>
            <hr class="my-4">
            <p class="mb-5">Kami selalu siap dengan pertanyaan dan penawaran yang ingin anda lakukan. silahkan menghubungi kami</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>0822-4808-0870</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:codefive65@gmail.com">codefive65@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>
@endsection