<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        a {
            color: blue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        h2, p {
            margin-bottom: 10px;
        }
    </style>
    <form action="/" method="POST">
        @csrf
        <input type ="text" name ="username" placeholder="Никнейм" required>
        <input type ="text" name ="title" placeholder="Заголовок" required>
        <input type ="text" name ="text" placeholder="Текст блога" required>
        <input type="submit" value="Опубликовать">

    @foreach ($blog as $item)
        <h2>{{ $item->title }}</h2>
        <p>Автор: {{ $item->username }}</p>
        <p>Время создания: {{ $item->created_at }}</p>
        <a href="/about/{id}">Подробнее!!</a>
    
        
    @endforeach
    
</body>
</html>