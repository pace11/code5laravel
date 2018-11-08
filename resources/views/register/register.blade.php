@extends('template')
@section('contentWebsite')
<section>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
        <h2 class="section-heading text-center">Daftarkan diri anda</h2>
        <hr class="my-4">
        <div class="row">
            @if (!empty($status))
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Maaf !!</strong> Email ini sudah terdaftar, silahkan gunakan email yang lain.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif
            <div class="col-md-12">
            <form action="{{ route('submitRegister')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="hidden" name="code_reg" value="{{ $code_reg }}">
                    <input type="text" class="valid form-control" name="fullname" autocomplete="off" placeholder="isikan nama ..." required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="isikan alamat email ..." required/>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" autocomplete="off" placeholder="isikan no hp ..." maxlength="12" required/>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio_ops" id="radio_umum" value="umum">
                        <label class="form-check-label" for="inlineRadio1">Umum</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio_ops" id="radio_sma" value="sma/smk">
                        <label class="form-check-label" for="inlineRadio1">SMA/SMK</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio_ops" id="radio_kuliah" value="kuliah">
                        <label class="form-check-label" for="inlineRadio1">Kuliah</label>
                    </div>
                </div>
                <div class="form-group">
                    <select id="type_ops" name="type_ops" class="form-control">
                        <option value="Embeeded Apps (Alat)">Embeeded Apps (Alat)</option>
                        <option value="Mobile Apps (Android)">Mobile Apps (Android)</option>
                        <option value="Web Apps (PHP)">Web Apps (PHP)</option>
                        <option value="Desktop Apps(VB.net,C#)">Desktop Apps(VB.net,C#)</option>
                    </select>
                </div>
                <div class="form-group">
                    <select id="universitas" name="universitas" class="form-control" onchange="checkUniv(this)">
                        <option value="STT PLN Jakarta">STT PLN Jakarta</option>
                        <option value="other">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <input style="display:none;" type="text" class="valid form-control" id="universitasother" name="universitasother" autocomplete="off" placeholder="isikan asal kampus ..." required/>
                </div>
                <div class="form-group">
                    <input type="text" class="valid form-control" id="nim" name="nim" autocomplete="off" placeholder="isikan NIM (Nomor Induk Mahasiswa) ..." required/>
                </div>
                <div class="form-group">
                    <input type="text" class="valid form-control" id="umum" name="umum" autocomplete="off" placeholder="isikan asal organisasi/kantor ..." required/>
                </div>
                <div class="form-group">
                    <input type="text" class="valid form-control" id="sekolah" name="sekolah" autocomplete="off" placeholder="isikan asal sekolah ..." required/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="desc_ta" name="desc_ta" rows="3" placeholder="isikan deskripsi mengenai judul tugas akhir ..." required></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="desc_method" name="desc_method" rows="3" placeholder="isikan metode yang digunakan ... ex : Naive Bayes, VSM, Cosine Similarity dll" required></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="desc_apps" name="desc_apps" rows="3" placeholder="isikan deskripsi mengenai aplikasi ..." required></textarea>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" name="simpan" value="Daftar Sekarang">
                </div>
            </form>
            </div>
            
        </div>
        </div>
    </div>
    </div>
</section>
@endsection
@section('script')
<script>
    $(function () {
        $('#sekolah,#umum,#universitas,#nim,#type_ops,#desc_ta,#desc_method,#desc_apps,#universitasother').hide();

        //show it when the checkbox is clicked
        $('#radio_umum').on('click', function () {
            if ($(this).prop('checked')) {
                $('#sekolah,#universitas,#nim,#desc_ta,#desc_method,#universitasother').hide();
                $('#sekolah,#universitas,#nim,#desc_ta,#desc_method,#universitasother').removeAttr('required');
                $('#umum,#desc_apps,#type_ops').fadeIn();
            } else {
                $('#sekolah,#umum,#universitas,#nim,#type_ops,#desc_ta,#desc_method,#desc_apps,#universitasother').hide();
            }
        });
        $('#radio_sma').on('click', function () {
            if ($(this).prop('checked')) {
                $('#umum,#universitas,#nim,#desc_ta,#desc_method,#universitasother').hide();
                $('#umum,#universitas,#nim,#desc_ta,#desc_method,#universitasother').removeAttr('required');
                $('#sekolah,#desc_apps,#type_ops').fadeIn();
            } else {
                $('#sekolah,#umum,#universitas,#nim,#type_ops,#desc_ta,#desc_method,#desc_apps,#universitasother').hide();
            }
        });
        $('#radio_kuliah').on('click', function () {
            if ($(this).prop('checked')) {
                $('#sekolah,#umum,#desc_apps,#universitasother').hide();
                $('#sekolah,#umum,#desc_apps,#universitasother').removeAttr('required');
                $('#universitas,#nim,#desc_ta,#desc_method,#type_ops').fadeIn();
            } else {
                $('#sekolah,#umum,#universitas,#nim,#type_ops,#desc_ta,#desc_method,#desc_apps,#universitasother').hide();
            }
        });
    });

    function checkUniv(that) {
        if (that.value == "other"){
            document.getElementById("universitasother").style.display = "block";
            document.getElementById("universitasother").className += " required";
        } else {
            document.getElementById("universitasother").style.display = "none";
        }
    }
</script>
@endsection
