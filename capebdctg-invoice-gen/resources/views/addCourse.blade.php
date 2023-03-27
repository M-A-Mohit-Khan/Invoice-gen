<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="courseAdded/{{$id}}" method="POST">
    @csrf
    

        <label for="courses">Choose a course:</label>
        <select id="courses" name="courses">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
        </select>

        <button type="submit">Submit</button>

    </form>
</body>
</html>