<!DOCTYPE html>
<html>
<head>
	<title>Enter Material</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	.form-signup{
			background-color: #C866CB;
		    padding-top: 10px;
		    padding-bottom: 20px;
		    padding-left: 20px;
		    padding-right: 20px;
		    border-radius: 5px;
		    border-color:#d2d2d2;
		    border-width: 5px;
		    margin-bottom: 7%;
		    box-shadow:0 1px 0 #cfcfcf;

	}
	.container{
		max-width: 50%;
		margin-top: 2%;
	}
	h3{ 
		border:0 solid #fff; 
		border-bottom-width:2px; //creates a line after heading 
		padding-bottom:10px;
		text-align: center;
	}

	</style>
</head>
<body >
<div class="container form-signup">
	<form action="{{url('/owner_login')}}" method="POST" enctype="multipart/form-data" >

		{{csrf_field()}}
		<h3>Login</h3><br>
		<h4><center>{{Session::get('invalid_password')}}{{Session::get('invalid_email')}}</center><h4>
		<label>Email:</label><br>
		<input type="email" name="email" class="form-control input-sm chat-input" placeholder="Enter Your Email!" required>		
		@foreach($errors->get('email') as $email_errors)
     		<span class="alert alert-danger"> * {{$email_errors}}</span>
    	@endforeach
    	<br>

    	<label>Password:</label><br>
		<input type="password" name="password" class="form-control input-sm chat-input" placeholder="Enter Your Password!" required>	
		@foreach($errors->get('password') as $password_errors)
     		<span class="alert alert-danger"> * {{$password_errors}}</span>
    	@endforeach
    	<br>

    	<center>    	
    		<input type="submit" class="btn">
    	</center>

	</form>
</div>
</body>
</html>