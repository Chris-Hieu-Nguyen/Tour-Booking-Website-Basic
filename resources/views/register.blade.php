<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TourTravel - Register</title>

  <!-- Custom fonts for this template-->
  <link href="/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/backend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
			<div class="col-lg-7">
				<div class="p-5">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
				</div>
				{{ Form::open(['url' => route('register.store'),'class' => 'user'])}}
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
							{{Form::text('first_name',null,['class' => 'form-control form-control-user', 'id' => 'exampleFirstName', 'placeholder' => 'First Name'])}}
							{!! $errors->has('first_name') ? '<p class="text-danger">'.$errors->first('first_name').'</p>' : '' !!}
						</div>
						<div class="col-sm-6">
							{{Form::text('last_name',null,['class' => 'form-control form-control-user', 'id' => 'exampleLastName', 'placeholder' => 'Last Name'])}}
							{!! $errors->has('last_name') ? '<p class="text-danger">'.$errors->first('last_name').'</p>' : '' !!}
						</div>
					</div>
					<div class="form-group">
						{{Form::text('email',null,['class' => 'form-control form-control-user','id' => 'exampleInputEmail', 'placeholder' => 'Email Address'])}}
						{!! $errors->has('email') ? '<p class="text-danger">'.$errors->first('email').'</p>' : '' !!}
					</div>
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
							{{Form::password('password',['class' => 'form-control form-control-user','placeholder' => 'Password'])}}
							{!! $errors->has('password') ? '<p class="text-danger">'.$errors->first('password').'</p>' : '' !!}
						</div>
						<div class="col-sm-6">
							{{Form::password('password_confirm',['class' => 'form-control form-control-user', 'placeholder' => 'Password Confirm'])}}
							{!! $errors->has('password_confirm') ? '<p class="text-danger">'.$errors->first('password_confirm').'</p>' : '' !!}                       
						</div>
					</div>
						<button type="submit" class="btn btn-primary btn-user btn-block">
							Register Account
						</button>
						<hr>
				{{Form::close()}}
				<hr>
				<div class="text-center">
					<a class="small" href="">Forgot Password?</a>
				</div>
				<div class="text-center">
					<a class="small" href="{{route('login')}}">Already have an account? Login!</a>
				</div>
				</div>
			</div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/backend/vendor/jquery/jquery.min.js"></script>
  <script src="/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/backend/js/sb-admin-2.min.js"></script>

</body>

</html>
