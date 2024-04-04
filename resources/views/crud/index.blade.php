<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bienvenido
    <p>
        Nombre:
        <?php echo $name; ?>
    </p>
    <p>
        Edad:
        {{ $age }}
    </p>

    <a href="{{ route('test') }}">Test</a>

</body>
</html>