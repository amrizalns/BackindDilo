<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register Account</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
  <div class="container">

    <div class="card card-register mx-auto mt-5">
      <div class="card-header">
        Register an Account
      </div>
      <div class="card-body">

        <!--Form Register-->
        <form method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" style="font-size:small">Name</label>
            <input style="font-size:small" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter your name"required autofocus>
            @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif
          </div>
          {{-- <div class="form-group">
            <label style="font-size:small" >Place and Date of Birth</label>
            <input style="font-size:small" id="placeOfBirth" type="text" class="form-control" name="placeOfBirth" placeholder="Place of birth"required autofocus>
          </div>
          <div class='input-group date' id='datepicker1'>
            <input style="font-size:small" name='dateOfBirth' type='text' class="form-control" placeholder="Date of birth"/>
            <span class="input-group-addon">
              <span class="fa fa-calendar"></span>
            </span>
          </div> --}}
          {{-- <hr> --}}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" style="font-size:small">Email address</label>
            <input style="font-size:small" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter email" required>

            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label style="font-size:small" for="password">Password</label>
            <input style="font-size:small" id="password" type="password" class="form-control" name="password" placeholder="Password" required>

            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>

          <div class="form-group" >
            <label style="font-size:small" for="password-confirm" >Confirm Password</label>
            <input style="font-size:small" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
          </div>
          <hr>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label style="font-size:small" for="name">Address</label>
            <input style="font-size:small" id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Address" required autofocus>

            @if ($errors->has('address'))
              <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label style="font-size:small" for="phone_number">Phone Number</label>
            <input style="font-size:small" id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number') }}" placeholder="Phone number"required autofocus>
            @if ($errors->has('phone'))
              <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <label style="font-size:small" for="country">Country</label>
            <input style="font-size:small" id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="Your country"required autofocus>
            @if ($errors->has('country'))
              <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
              </span>
            @endif
          </div>
          <br>
          <div>
            <button type="submit" class="btn btn-primary btn-block">
              Register
            </button>
          </div>
        </form>
      </div>
      <div class="text-center">
        <a class="d-block small mt-3" href="/">Login Page</a>
        <br>
      </div>
    </div>
  </div>
  <br>
  <br>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
$(document).ready(function(){
  var date_input=$('input[name="dateOfBirth"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  date_input.datepicker({
    format: 'yyyy-mm-dd',
    container: container,
    todayHighlight: true,
    autoclose: true,
  })
})
</script>

</body>

</html>
