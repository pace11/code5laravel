@extends('template')
@section('style')
<style>
    
    .header {
        background-color: #f05f40;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 15px;
    }
    .header img {
        width:25%;
    }

    .isi li {
        color: #f05f40;
        font-size:18px;
        margin:10px 0px 5px 0px;
    }
    .isi .isi-content{
        background-color:#e3e3e3;
        padding:5px;
        border-radius: 10px;
        text-align:justify;
    }
    .isi .isi-content b {
        color:#f05f40;
    }

    @media (max-width: 640px) {
        
        .header img {
            width:50%;
        }

    }

</style>
@endsection
@section('contentWebsite')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center">
                <div class="header">
                    <img src="{{ URL::asset("img/mono-putih-faq.png") }}" alt="logo-code5">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto isi"> 
                <ol>
                    <li>Apasih Code5 ?</li>
                    <div class="isi-content">
                        <b>CODE5</b> adalah konsultan dalam membangun Aplikasi berbasis <b>Web</b> maupun <b>Mobile</b> yang diperuntukkan dalam project menengah kebawah. selain membangun Aplikasi, kami
                        juga melakukan mentoring dan pengajaran terhadap aplikasi yang sedang dibangun untuk client.
                    </div>

                    <li>Kenapa harus di Code5 ?</li>
                    <div class="isi-content">
                        <b>CODE5</b> memberikan pengalaman terbaru dalam bidang Development Aplikasi. Kami melakukan Monitoring Instruktur, Konsultasi Grup dan Repository dalam mengerjakan project yang membuat
                        setiap pembangunan fitur terlapor dengan rapi dan efektif.
                    </div>

                    <li>Aplikasi apa aja yang bisa dibangun di Code5 ?</li>
                    <div class="isi-content">
                        <b>CODE5</b> membuka beberapa platform dalam membangun aplikasi antara lain <b>Web Apps</b>, <b>Android Apps</b>, <b>Embedded Apps</b> dan <b>Desktop Apps</b>. dengan ini client dapat memilih platform yang akan digunakan
                        dalam membangun aplikasi yang diinginkan.
                    </div>

                    <li>Sistem yang berjalan di Code5 seperti apa ?</li>
                    <div class="isi-content">
                        <b>CODE5</b> menerapkan sistem <b>Educative</b>. Dalam hal ini instruktur akan dibagi dan memiliki tanggung jawab ke beberapa Client. ini dimaksudkan agar kolaborasi antar Instruktur dan Client lebih
                        terarah dan terkodinasi.
                    </div>

                    <li>Berapa durasi pembelajaran di Code5 ?</li>
                    <div class="isi-content">
                        <b>CODE5</b> memilik durasi umum untuk semua platform dan kelas yaitu 8 pertemuan, dimana setiap bulannya terdapat 4 pertemuan. jika ternyata dalam waktu 8 pertemuan tersebut project yang dikerjakan 
                        belum selesai karena terkendala dari instrukturnya, instruktur di code5 akan mencoba menambahkan pertemuan yang akan ditukan dengan kesepakatan <b>Instruktur Code5</b> dan <b>Client</b>.
                    </div>

                    <li>Berapa tarif yang dikenakan untuk setiap platform di Code5 ?</li>
                    <div class="isi-content">
                        <b>CODE5</b> dalam menentukan tarif tiap platformnya berdasarkan tingkat kesusahan dalam program, metode yang digunakan dan teknologi yang digunakan. Kami akan lebih merasa nyaman jika langsung melakukan negosiasi
                        langsung kepada Client yang bersangkutan. Oleh karena sebelumnya bisa menanyakan langsung kepada kami via telepon <b><a href="tel:+6282248080870">0822 4808 0870</a></b> atau melalui Email kami <b><a href="mailto:codefive65@gmail.com">codefive65@gmail.com</a></b>
                    </div>

                    <li>Berapa tarif yang dikenakan untuk setiap platform di Code5 ?</li>
                    <div class="isi-content">
                        <b>CODE5</b> dalam menentukan tarif tiap platformnya berdasarkan tingkat kesusahan dalam program, metode yang digunakan dan teknologi yang digunakan. Kami akan lebih merasa nyaman jika langsung melakukan negosiasi
                        langsung kepada Client yang bersangkutan. Oleh karena sebelumnya bisa menanyakan langsung kepada kami via telepon <b><a href="tel:+6282248080870">0822 4808 0870</a></b> atau melalui Email kami <b><a href="mailto:codefive65@gmail.com">codefive65@gmail.com</a></b>
                    </div>
                <ol>
            </div>
        </div>


    </div>
</section>
@endsection
