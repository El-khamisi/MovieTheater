<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    
    
    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    



    <!-- Loading main css file -->
    <link href="scss/auth.css" rel="stylesheet">

</head>
<body>

    @if($msg = Session::get('error'))
    <div class="col-sm-12">
            <div class="alert danger">
            <i class="start-icon far fa-times-circle faa-pulse "></i>
            <strong>Warning!</strong> {{$msg}}
            </div>
    </div>
    @endif

    @if($msg = Session::get('Success'))
    <div class="col-sm-12">
             <div class="alert success">		
             <i class="fas fa-check"></i>
          <strong>Well done!</strong> {{$msg}}
        </div>
      </div>
    @endif
    
<div class="login-container" id="login-container">
	<div class="form-container sign-up-container">
		<form action="/signup" method="POST">
            @csrf
			<h1>Create Account</h1>
			<input type="text" name="username" placeholder="User Name" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="/login" method="POST">
            @csrf
			<h1>Sign in</h1>
			<input type="text" name="username" placeholder="User Name" />
			<input type="password" name="password" placeholder="Password" />
			<button type="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
    
    <script src="js/auth.js"></script>
    
</body>
</html>