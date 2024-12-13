<?php 

echo "Hello World 🥡!<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    @if ( $errors->any() )

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form action="profile" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo" >
        <button type="submit">Enviar</button>
    </form>
</body>
</html>