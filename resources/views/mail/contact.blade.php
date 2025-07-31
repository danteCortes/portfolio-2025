<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentame tu proyecto</title>
</head>
<body
    style="background-color: #f4f4f4; padding: 20px; margin: 0 auto; width: 80%; max-width: 600px; 
        border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);"
>
    <h1
        style="color: #0f0f0f; font-size: 30px; text-align: center; font-family: Arial, sans-serif;
            margin-top: 20px; margin-bottom: 20px;"
    >
        Hey, {{ $name }} Trata de Contactarnos!
    </h1>

    <div
        style="padding: 10px; border: 1px solid #eee; border-radius: 5px; 
            background-color: #181818; margin: 20px;"
    >
        <p
            style="color: #00c9a7; font-size: 18px; font-family: Arial, sans-serif;"
        >
            Nos dejó el siguiente mensaje:
        </p>
    
        <p
            style="color: #f4f4f4; font-size: 16px; font-family: Arial, sans-serif; margin-top: 10px;"
        >
            {{ $content }}
        </p>
    </div>

    <p>
        Puedes contactarlo a través de su correo electrónico: 
        <a href="mailto:{{ $email }}">{{ $email }}</a>
    </p>

</body>
</html>