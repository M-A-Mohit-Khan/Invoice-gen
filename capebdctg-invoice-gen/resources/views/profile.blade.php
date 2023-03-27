<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$profile->id}}
    <a href="/add-course/{{$profile->id}}">Add course</a>
    
    <a href="/edit/{{$profile->id}}">Edit</a>
    <a href="/delete/{{$profile->id}}">Delete</a>

    <div>
        <h2>All profiles</h2>
        @foreach ($enrolled_courses as $enrolled_course)
        <p>name: {{$enrolled_course->name}}</p>
        <p><a href="/invoice-gen/{{$profile->id}}/{{$enrolled_course->name}}">Create Invoice</a></p>
        @endforeach
    </div>
    
</body>
</html>