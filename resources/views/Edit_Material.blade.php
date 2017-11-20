<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
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
	.container{
		max-width: 50%;
	}

	</style>
</head>
<body style="text-align: center;">				
	<h4>Edit the Material Details</h4>
	<div class="container form-signup">
		<form action="{{url('/edit_material')}}/{{$Material_data->id}}" method="POST" enctype="multipart/form-data">
			{{csrf_field()}} 
		    <div class="form-signup">
		        <label>Major Metal:</label>
					<select name="major_metal" value="{{$Material_data->major_metal}}" class="form-control input-sm chat-input" >
						  <option value="Iron">Iron</option>
						  <option value="Copper">Copper</option>
						  <option value="Aluminium">Aluminium</option>
						  <option value="Bronze">Bronze</option>
					</select>
					@foreach($errors->get('major_metal') as $major_metal_errors)
     						<span class="alert alert-danger"> * {{$major_metal_errors}}</span>
    				@endforeach
					<br>


				<label>Enter Due Date:</label>
				       	<input type="date" name="due_date" value="{{$Material_data->due_date}}" class="form-control input-sm chat-input">
 						@foreach($errors->get('due_date') as $due_date_errors)
     						<span class="alert alert-danger"> * {{$due_date_errors}}</span>
    	  				@endforeach
				       	<br>


	    		<label>Enter Description:</label><br>
		 				<textarea rows="4" name="description" style="resize: none;">{{$Material_data->description}}</textarea>
		 				@foreach($errors->get('description') as $description_errors)
     						<span class="alert alert-danger"> * {{$description_errors}}</span>
    	  				@endforeach<br>
		 				<br>


		 		<label>Select Combinations</label>
		 				<input type="checkbox" name="combinations[]" value="Iron" > Iron
						  <input type="checkbox" name="combinations[]" value="Copper">Copper
						  <input type="checkbox" name="combinations[]" value="Aluminium">Aluminium
						  @foreach($errors->get('combinations') as $combinations_errors)
     						<span class="alert alert-danger"> * {{$combinations_errors}}</span>
    	 				  @endforeach<br>
						  <br><br>
				        </br>


	    		<label>Upload Picture:</label><br>
	    				<input type="file" name="image" lass="form-control input-sm btn-primary">
	    				@foreach($errors->get('image') as $image_errors)
     						<span class="alert alert-danger"> * {{$image_errors}}</span>
    	 				@endforeach<br><br>
				        <span class="group-btn">    
				           <input type="submit"> 
				         </span>
		    </div>
		</form>
	</div>
</body>
</html>
