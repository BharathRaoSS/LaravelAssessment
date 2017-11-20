<!DOCTYPE html>
<?php $count=1; ?>
<html>
<head>
	<title>Display Materials</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="text-align: center;">
	<h4>Material Details List</h4>
	<div class="container-fluid">
		<div class="col-md-12"><br><br>
			<table class="table table-bordered" style="overflow-x: scroll;">
				<thead>
					<th>S.No</th>
					<th>major_metal</th>
					<th>due_date</th>
					<th>description</th>
					<th>image_url</th>
					<th>combinations</th>
					<th>Edit</th>
					<th>Delete</th>
				</thead>
				<tbody>
					@foreach($materials_list as $material)
					<tr>
						<td>{{$count++}}</td>
						<td>{{$material->major_metal}}</td>
						<td>{{$material->due_date}}</td>
						<td>{{$material->description}}</td>
						<td>{{$material->image_url}}</td>
						<td>{{$material->combinations}}</td>
						<td><a href="{{url('/edit_material')}}/{{$material->id}}" target='new_window' style="cursor:pointer"class='glyphicon glyphicon-pencil'></a></td>
						<td><a href="{{url('/delete_material')}}/{{$material->id}}" class='glyphicon glyphicon-remove' style="cursor:pointer"></a></td>
					</tr>				
					@endforeach	
				</tbody>
			</table>
			<a href="{{url('/enter_material')}}">Click Here to Enter Material List</a>
		</div>
	</div>
</body>
</html>