<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto desde Axencapital.com</title>
</head>
<body>
    <p>
        Tienes un mensaje nuevo de: {{$request->nombre}}
    </p>
    <p>
        Mensaje: {{$request->asunto}}
    </p>
    <p>Puedes contactarlo al teléfono: {{$request->tel}}</p>
    <p>Y al correo: {{$request->mail}}</p>

</body>
</html>
