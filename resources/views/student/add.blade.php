<form action="{{route('handleAddStudent')}}" method="POST">
	{{csrf_field()}}
	<label>Name:</label>
	<input type="text" name="name">
	<br>
	<label>Email:</label>
	<input type="email" name="email">
	<br>
	<label>Password:</label>
	<input type="password" name="password">
	<br>
<select name="classroom">
	@foreach($classrooms as $classroom)
<option value="{{$classroom->id}}">{{$classroom->title}}</option>
@endforeach
</select>
<br>
<input type="submit">
</form>