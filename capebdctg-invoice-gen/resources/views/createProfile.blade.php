<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello


    <form action="created" method="POST">
    @csrf
    

        <input type="text" name="name" id="name" placeholder="Enter full name">
        <input type="email" name="email" id="email"  placeholder="Enter email address">
        <input type="number" name="phone" id="phone"  placeholder="Enter phone number 11 digits">
        <button type="submit">Submit</button>

    </form>
</body>
</html>