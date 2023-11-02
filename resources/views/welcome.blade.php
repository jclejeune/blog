<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="card m-4 p-4" style="width: 50vw;">
            <h1 class="text-center mb-4">Bienvenue sur mon blog</h1>
            <a href="{{ url('/posts') }}" class="text-center p-4">Visiter Mon Blog</a>
        </div>
    </div>
    
</body>

</html>