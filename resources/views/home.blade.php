
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>
</head>
<body>
    <h1> {{ $title }} </h1>

    @if (count($fruits) > 0)

        <h3>Frutta:</h3>
        <ul>
            @foreach ($fruits as $fruit)
                <li> {{ $fruit }} </li>
            @endforeach
        </ul>

    @else

        <h3>Non ci sono Frutti</h3>

    @endif

    <h3>User</h3>
    <p>
        <strong>Nome: </strong> {{ $user['name'] }} <br>
        <strong> Cognome: </strong> {{ $user['surname'] }} <br>
        <strong> E-mail: </strong> {{ $user['email'] }} <br>
        <strong> Età: </strong> {{ $user['age'] }} <br>
        <strong> Città: </strong> {{ $user['city'] }}
    </p>


</body>
</html>
