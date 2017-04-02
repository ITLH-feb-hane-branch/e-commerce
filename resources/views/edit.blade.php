<html>
<head>
</head>
<form action="/update/{{$users->id}}" method="post">
{{csrf_field()}}
id:<input type="text" value="{{$users->id}}" name="id"></input>
task name:<input type="text" value="{{$users->task_name}}" name="task_name"></input>
description:<input type="text" value="{{$users->description}}" name="description"></input>
location id:<input type="text" value="{{$users->location_id}}" name="location_id"></input>
status:<input type="text" value="{{$users->status}}" name="status"></input>
<input type="submit" value="Update"></form>
</html>
