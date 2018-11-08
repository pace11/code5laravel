<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CODE5 | LOGIN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ url("dist/css/adminlte.min.css") }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url("plugins/iCheck/square/blue.css") }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><i class="fas fa-user-secret"></i><b> LOGIN</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login to start your session</p>

      <form action="{{ route('admin.login.submit') }}" method="POST">
        {{ csrf_field() }}
        <div class="col-md-12 mb-3">
            <div class="input-group{{ $errors->has('email') ? 'has-error' : ''}}">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-user"></i></span>
              </div>
              <input type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}" required>
              @if($errors->has('email'))
              <div class="invalid-feedback">
                {{ $errors->first('email') }}
              </div>
              @endif
            </div>
        </div>

        <div class="col-md-12 mb-3">
          <div class="input-group{{ $errors->has('password') ? 'has-error' : ''}}">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            @if($errors->has('password'))
            <div class="invalid-feedback">
              {{ $errors->first('password') }}
            </div>
            @endif
          </div>
        </div>
        <div class="col-md-12 mb-3">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-danger btn-block btn-flat">Login <i class="fas fa-sign-in-alt"></i></button>
            </div>
        </div>

      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ url("plugins/jquery/jquery.min.js") }}"></script>
<script src="{{ url("plugins/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ url("plugins/iCheck/icheck.min.js") }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%'
    })
  })
</script>
</body>
</html>
