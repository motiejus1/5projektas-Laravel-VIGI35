<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project List</title>
</head>
<body>
     <h1>Project List</h1>
     <ul>
        @foreach ($projects as $project)
            <li>{{$project}}</li>
        @endforeach
     </ul> 
</body>
</html>