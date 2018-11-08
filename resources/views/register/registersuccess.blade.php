@extends('template')
@section('contentWebsite')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-success">Pendaftaran Berhasil</button>
                        <p class="card-text">
                            TerimaKasih telah melakukan pendaftaran. Konfirmasi Pendaftaran akan kami kirimkan ke email anda. Jika masih belum ada email masuk,
                            silahkan mengubungi kami via Telpon <b><a href="tel:+6282248080870">0822 4808 0870</a></b> atau melalui Email kami <a href="mailto:codefive65@gmail.com">codefive65@gmail.com</a>.
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                @foreach ($successReg as $row)
                                    <tr><td>ID REGISTRASI</td><td>: <b>{{ $row->id_reg }}</b></td></tr>
                                    <tr><td>NAMA LENGKAP</td><td>: <b>{{ $row->name }}</b></td></tr>
                                    <tr><td>EMAIL</td><td>: <b>{{ $row->email }}</b></td></tr>
                                    <tr><td>NO HP</td><td>: <b>{{ $row->phone }}</b></td></tr>
                                    <tr><td>TIPE</td><td>: <b>{{ $row->type_ta }}</b></td></tr>
                                    @if (!empty($row->organization))
                                        <tr><td>ORGANISASI/KANTOR</td><td>: <b>{{ $row->organization }}</b></td></tr>
                                    @endif
                                    @if (!empty($row->school))
                                        <tr><td>SEKOLAH</td><td>: <b>{{ $row->school }}</b></td></tr>
                                    @endif
                                    @if (!empty($row->campus))
                                        <tr><td>KAMPUS</td><td>: <b>{{ $row->campus }}</b></td></tr>
                                    @endif
                                    @if (!empty($row->nim))
                                        <tr><td>NIM</td><td>: <b>{{ $row->nim }}</b></td></tr>
                                    @endif
                                    @if(!empty($row->desc_apps))
                                        <tr><td>DESKRIPSI APLIKASI</td><td>: <b>{{ $row->desc_apps }}</b></td></tr>
                                    @endif
                                    @if(!empty($row->desc_ta))
                                        <tr><td>DESKRIPSI TA</td><td>: <b>{{ $row->desc_ta }}</b></td></tr>
                                    @endif
                                    @if(!empty($row->desc_method))
                                        <tr><td>DESKRIPSI METODE</td><td>: <b>{{ $row->desc_method }}</b></td></tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </ul>
                    <div class="card-body">
                        <a href="{{ url('/') }}" class="btn btn-info">Kembali</a>
                        <!-- <a href="index.php" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection