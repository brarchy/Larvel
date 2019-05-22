<form action="{{route('handleAddClassroom')}}" method="POST">
	{{csrf_field()}}
	<label>Title:</label>
	<input type="text" name="title">
	<label>Photo:</label>
	<input type="text" name="photo">
	<input type="submit" name="">
</form>


<div>
	<table>
		<th>Affichage</th>
@foreach($classrooms as $classroom)
		<tr>
			
			<td>{{$classroom->title}}</td>
			<td>
				comporte, <strong>{{$classroom->students->count()}}</strong> Etudiants dont:
			</td>

				@foreach($classroom->students as $std)
				<td>
				<a href="{{route('showStudent',['id' => $std->id])}}" style="text-decoration: none;">{{$std->name}} </a> <a style="text-decoration: none; color: red;" href="{{route('handleDeleteStudent',['id' => $std->id]) }}">delete</a>
				</td>
			@endforeach
		
			         
			
		</tr>
		@endforeach
	</table>
</div>