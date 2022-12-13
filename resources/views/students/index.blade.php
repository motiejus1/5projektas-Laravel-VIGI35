<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    {{-- $students -masyvas --}}

    {{-- <a href="{{route('students.create')}}">Create new student</a> --}}
    
    {{-- Studento sukurimo formos --}}
  
        @extends('students.create')
   
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Project</th>
            <th>Actions</th>
        </tr>
        
        @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td><a href="{{route('students.show', $student)}}">{{$student->name}}</a></td>
                <td>{{$student->surname}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->project}}</td>
                <td>
                    <form method="POST" action="{{route('students.destroy', $student)}}">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                    <a href="{{route('students.edit', $student)}}">Edit</a>
                    

                </td>
            </tr>
        @endforeach


    </table>
    
    <form method="POST" action="{{route('students.deleteall')}}">
        @csrf
        <button type="submit">Delete all</button>
    </form>    
</body>
</html>