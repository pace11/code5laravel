@extends('template')
@section('contentWebsite')
<section>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading">Daftarkan diri anda</h2>
        <hr class="my-4">
        <div class="row">
            <div class="col-md-12 text-center">
            <form action="{{ route('cobaSubmit')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" autocomplete="off" placeholder="isikan nama ..." required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="isikan alamat email ..." required/>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="phone" autocomplete="off" placeholder="isikan no hp ..." maxlength="12" required/>
                </div>
                <div class="form-group">
                    <select name="type_ops" class="form-control">
                        <option value="Embeeded Apps (Alat)">Embeeded Apps (Alat)</option>
                        <option value="Mobile Apps (Android)">Mobile Apps (Android)</option>
                        <option value="Web Apps (PHP)">Web Apps (PHP)</option>
                        <option value="Desktop Apps(VB.net,C#)">Desktop Apps(VB.net,C#)</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="desc_ta" rows="3" placeholder="isikan deskripsi mengenai judul tugas akhir ..."></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="desc_method" rows="3" placeholder="isikan metode yang digunakan ... ex : Naive Bayes, VSM, Cosine Similarity dll "></textarea>
                </div>
                <div class="form-group">
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
