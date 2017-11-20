<html>
<head>
	  <title>Sign Up</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <style type="text/css">

	  	body {
		  	background-color:#fff;
		  	-webkit-font-smoothing: antialiased;
		  	font: normal 14px Roboto,arial,sans-serif;
		}

		h4 { 
			border:0 solid #fff; 
			border-bottom-width:1px; //creates a line after heading 
			padding-bottom:10px;
			text-align: center;
		}

		textarea {
		    resize: none;
		    width: auto;
		    height: auto;
		}

		.page-header{
			background-color: blue;
			color:white;
			text-align: center;
			margin-top:0;
			margin-bottom: 5%;
			padding-top:auto;
			left: 0;
		}

		.ftr{
			padding-bottom: 1%;
			position: fixed;
			padding-top: 1%;
		    left: 0;
		    bottom: 0;
		    width: 100%;
		    color: white;
		    background-color: blue;
		    text-align: center;
		}

		.form-signup{
			background-color: #EDEDED;
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

		.form-control {
		    border-radius: 5px;
		}

		.wrapper {
		    text-align: center;
		}
		
		#fileselector {
  		    margin: 10px; 
		}

		#upload-file-selector {
   			display:none;   
		}		

	  </style>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
				<h2 class="page-header">Sign Up</h2> 
		</div>
	</div>
	<div class="container">
	    <div class="row content">
	        <div class="col-md-12">
	        	<form action="{{url('/owner_signup')}}" method="POST">
	        		{{csrf_field()}}
		            <div class="form-signup">
			            <h4>Welcome to new Faculty</h4>
				        <input type="text" name="name" id="name" class="form-control input-sm chat-input" placeholder="Enter your Name" required /></br>
				        <input type="email" name="email" id="email" class="form-control input-sm chat-input" placeholder="Enter your E-mail" required /></br>
				        <input type="password" id="password" name="password" class="form-control input-sm chat-input" placeholder="Choose Password"  /></br>
				        <input type="password" id="confirm_pswd" class="form-control input-sm chat-input" placeholder="Confirm Password"  /></br>
			            <div class="wrapper">
				            <span class="group-btn">     
				            	<input onclick="return check()" type="submit" name="submit" action="upload.php" value="SignUp" class="btn btn-primary btn-md">
				            </span>
			            </div>
		            </div>
	        	</form>
	        </div>
	    </div>
	</div>
	<div class="container-fluid ftr">
			<div class="row">
				<marquee><h5>College Management System Ltd.&copy; 2017</h5></marquee>
			</div>
	</div>
	 <script type="text/javascript">
	  function check()
	  {
	  	var pswd=document.getElementById('password').value;
	  	var confirm_pswd=document.getElementById('confirm_pswd').value;
	  	if(pswd===confirm_pswd) //Checking the Type Equivalent along with actual comparison.
	  	{	
	  		if(pswd.length==4)
	  		return true;
	  		else
	  		{
	  		alert("Password Must be atleast four Characters"); 
	  		return false;		
	  		}
	  	}
	  	else
	  	{
	  		alert("Entered Password doesn't matches the Confirm Password!");
	  		return false;
	  	}
	  }	
	  </script>
</body>
</html>