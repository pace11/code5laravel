@extends('template')
@section('contentWebsite')
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Cek Status Anda Disini</h2>
            <hr class="my-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <input type="text" class="form-control" id="checkid" name="checkid" autocomplete="off" placeholder="isikan id registrasi anda ..." required/>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
        $('#checkid').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url : '{{ route('check') }}',
                data:{'checkid':$value},
                    success:function(data){
                        $('table').html(data);
                    }
            });
        })
        </script>

    </div>
</section>
@endsection
