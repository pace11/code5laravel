@extends('template')
@section('contentWebsite')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 text-center">
                        <img src="{{ URL::asset("img/lOGO.png") }}" alt="logo-code5" width="40%">

                        </div>
                        <button class="btn btn-success">Pendaftaran Berhasil</button>
                        <p class="card-text">
                            TerimaKasih telah melakukan pendaftaran. Konfirmasi Pendaftaran akan kami kirimkan ke email anda. Jika masih belum ada email masuk,
                            silahkan mengubungi kami via Telpon 082248080870 atau melalui Ema <a href="mailto:codefive65@gmail.com">codefive65@gmail.com</a>.
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <table class="table table-striped">
                            @foreach ($successReg as $row)
                                <tr>
                                    <td>ID REGISTRASI</td><td>: <b>{{ $row->id_reg }}</b></td>
                                </tr>
                                <tr>
                                    <td>NAMA LENGKAP</td><td>: <b>{{ $row->name }}</b></td>
                                </tr>
                                <tr>
                                    <td>EMAIL</td><td>: <b>{{ $row->email }}</b></td>
                                </tr>
                                <tr>
                                    <td>NO HP</td><td>: <b>{{ $row->phone }}</b></td>
                                </tr>
                                <tr>
                                    <td>TIPE</td><td>: <b>{{ $row->type_ta }}</b></td>
                                </tr>
                                <tr>
                                    <td>DESKRIPSI TA</td><td>: <b>{{ $row->desc_ta }}</b></td>
                                </tr>
                                <tr>
                                    <td>DESKRIPSI METODE</td><td>: <b>{{ $row->desc_method }}</b></td>
                                </tr>
                            @endforeach
                        </table>
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