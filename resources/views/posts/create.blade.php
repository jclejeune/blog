<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body class="flex ">
    <div style="background-color: white" class="p-4 card" style="margin: 20vw; width:60">
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

        <form action="{{ route('posts.store') }}" method="POST"  class="pb-4">
            <div>
                @csrf

                <div class="d-block row mx-2">
                    <label for="title" class="form-label">
                        <h3>Title</h3>
                    </label>
                    <input type="text" name="title" id="title" rows="4" class="form-control" required>
                </div>

                <div class="d-block row flex mx-2">
                    <label for="content" class="form-label">
                        <h3>Content</h3>
                    </label>
                    <textarea name="content" id="content" rows="4" class="form-control" required></textarea>
                </div>
                <div class="d-flex justify-content-around">
                    <button type="submit" class="d-block btn btn-light m-4" style="width: 18rem;">Créer</button>
                </div>
            </div>
        </form>
        <div class="nav navbar text-center align-middle d-flex row">
            <a href="/">Home</a>
        </div>        
    </div>

</body>

</html>