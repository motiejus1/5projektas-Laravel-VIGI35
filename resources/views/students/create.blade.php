<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create student</title>
</head>
<body>
    <form method="POST" action="{{route('students.store')}}">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Phone">
        <input type="text" name="project" placeholder="Project">
        <button type="submit">Create</button>
    </form>
</body>
</html>