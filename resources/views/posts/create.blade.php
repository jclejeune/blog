<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="container mx-auto m-4 p-8" style="background-color: white">
        <h1>Create Post</h1>

        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title"><h3>Title</h3></label>
                <input type="text" name="title" id="title" class="form-control" rows="4" required>
            </div>

            <div class="form-group">
                <label for="content"><h3>Content</h3></label>
                <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</body>

</html>