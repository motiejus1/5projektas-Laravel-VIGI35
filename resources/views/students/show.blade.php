<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student info</title>
</head>
<body>
    

    <h2>{{$student->id}}</h2>
    <h2>{{$student->name}}</h2>
    <h2>{{$student->surname}}</h2>
    <h2>{{$student->email}}</h2>
    <h2>{{$student->phone}}</h2>
    <h2>{{$student->project}}</h2>
    <a href="{{route('students.index')}}">Back to students</a>
    {{-- delete --}}
    <form method="POST" action="{{route('students.destroy', $student)}}">
        @csrf
        <button type="submit">Delete</button>
    </form>    


</body>
</html>