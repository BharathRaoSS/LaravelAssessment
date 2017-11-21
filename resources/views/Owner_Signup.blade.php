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
	<form action="{{url('/owner_signup')}}" method="POST" enctype="multipart/form-data" >
		{{csrf_field()}}
		<h3>Sign Up</h3><br>
		<label>Name:</label><br>
		<input type="text" name="name" class="form-control input-sm chat-input" placeholder="Enter Your Name!" required>		
		@foreach($errors->get('name') as $name_errors)
     		<span class="alert alert-danger"> * {{$name_errors}}</span>
    	@endforeach
    	<br>

		<label>Email:</label><br>
		<input type="email" name="email" class="form-control input-sm chat-input" placeholder="Enter Your Email!" required>		
		@foreach($errors->get('email') as $email_errors)
     		<span class="alert alert-danger"> * {{$email_errors}}</span>
    	@endforeach
    	<br>

		<label>Phone Number:</label><br>
		<input type="tel" name="phone" class="form-control input-sm chat-input" placeholder="Enter Your Phone Number!" required>		
		@foreach($errors->get('phone') as $phone_errors)
     		<span class="alert alert-danger"> * {{$phone_errors}}</span>
    	@endforeach
    	<br>

    	<label>Password:</label><br>
		<input type="password" name="password" class="form-control input-sm chat-input" placeholder="Enter Your Password!" required>	
		@foreach($errors->get('password') as $password_errors)
     		<span class="alert alert-danger"> * {{$password_errors}}</span>
    	@endforeach
    	<br>

    	<label>Confirm Password:</label><br>
		<input type="password" name="confirm_password" class="form-control input-sm chat-input" placeholder="Confirm Password!" required>
		@foreach($errors->get('confirm_password') as $confirm_password_errors)
     		<span class="alert alert-danger"> * {{$confirm_password_errors}}</span>
    	@endforeach
    	<br>

		<label>Address:</label><br>
		  <textarea rows="4" name="address" style="resize: none; width: 100%;" placeholder="Enter Your Address!" required></textarea>
		  @foreach($errors->get('address') as $address_errors)
     		<span class="alert alert-danger"> * {{$address_errors}}</span>
    	  @endforeach<br>
		<br>

		<label>Upload Picture:</label><br>
		  	<center>
		  		<input type="file" name="image" class="btn-default"><br>
				<input type="submit" class="btn">
			</center>
		  @foreach($errors->get('image') as $image_errors)
     		<span class="alert alert-danger"> * {{$image_errors}}</span>
    	  @endforeach<br>
		  <br><br>
	</form>
</div>
</body>
</html>