<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Create Profile</h2>
        <a href="/create-profile">add</a>
    </div>

    <div>
        <h2>All profiles</h2>
        @foreach ($participants as $participant)
        <p>name: {{$participant->name}}</p>
        <p><a href="/profile/{{$participant->id}}">action</a></p>
        @endforeach
    </div>
    



</body>
</html>