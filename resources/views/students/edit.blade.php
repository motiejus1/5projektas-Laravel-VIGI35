<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit student</title>
</head>
<body>
    {{-- Formos inputuose turi atsivaizduoti specifinio studento informacija --}}
    <h2>{{$student->id}}</h2>
    <form method="POST" action="{{route('students.update', $student)}}">
        @csrf
        <input type="text" name="name" placeholder="Name" value='{{$student->name}}'>
        <input type="text" name="surname" placeholder="Surname" value='{{$student->surname}}'>
        <input type="text" name="email" placeholder="Email" value='{{$student->email}}'>
        <input type="text" name="phone" placeholder="Phone" value='{{$student->phone}}'>
        <input type="text" name="project" placeholder="Project" value='{{$student->project}}'>
        <button type="submit">Edit</button>
    </form>
</body>
</html>