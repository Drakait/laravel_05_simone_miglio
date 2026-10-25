<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grazie per averci contattato!</title>
    
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    
    <style>
        .box-bg-mail {
            background-color: #212529;
            color: #ffffff;
            padding: 24px;
            border-radius: 16px;
        }
    </style>
</head>
<body>
    <div>
        <div class="box-bg-mail">
            <h1>Ciao, {{ $name }}</h1>
            <h3>Grazie per averci contattato</h3>
            <p>Questo è il messaggio che ci hai inviato:</p>
            <ul>
                <li>Nome: {{ $name }}</li>
                <li>Email: {{ $email }}</li>
                <li>Messaggio: {{ $usermessage }}</li>
            </ul>
        </div>
    </div>
</body>
</html>