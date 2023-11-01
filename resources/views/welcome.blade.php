<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="container mx-auto m-4 p-8" style="background-color: white">
        <h1 class="uppercase text-center">Bienvenue sur mon blog</h1>
        <p>
            <a href="{{ url('/posts') }}" class="uppercase text-center">Visiter Mon Blog</a>
        </p>
    </div>


</body>

</html>