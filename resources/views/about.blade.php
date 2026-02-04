<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur ipsa voluptates error sunt architecto, sequi adipisci ex iste impedit id doloremque a fugiat suscipit quia laborum possimus sed molestiae illo.</p>
    <a href='/'>Home</a>
    <br>
    
    @foreach($users as $user)
        {{ $user->name }}, 
    @endforeach
    <br>
    @foreach($cars as $car)
        {{ $car->brand }}, 
    @endforeach

</body>
</html>