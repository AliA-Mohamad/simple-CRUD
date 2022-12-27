<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }}</title>
</head>

<body>
    <div>
        <h1>{{ $title }}</h1>
        
        {{ $slot }}
    </div>

</body>

    <!-- 
        Esse CSS é bem basico, só estou inportanto uma fonte do googole
        e dando uma estilizada pro projeto não ficar tão feio, optei por
        fazer assim dentro da propria view ja que o foco é o CRUD.
    -->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Noto Sans', sans-serif;
        }

        body {
            background: rgb(40, 43, 53);
        }

        h1 {
            padding: 20px;
            color: white;
            text-align: center;
        }
    </style>
</html>