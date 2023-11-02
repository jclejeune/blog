<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div style="background-color: white" class=" m-4 pb-4">
            <h1 class="text-center">Edit</h1>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    
            <form action="{{ route('posts.update', $post) }}" method="POST" class="pb-4">
                <div class="mb-3">
                    @csrf
                    @method('PUT')
    
                    <div class="d-block row flex mx-2">
                        <label for="title" class="form-label">
                            <h3>Title</h3>
                        </label>
                        <input type="text" name="title" id="title" rows="4" class="form-control"
                            value="{{ $post->title }}" required>
                    </div>
    
                    <div class="d-block row flex mx-2">
                        <label for="content" class="form-label">
                            <h3>Content</h3>
                        </label>
                        <textarea name="content" id="content" rows="4" class="form-control" required>{{ $post->content }}</textarea>
                    </div>
    
                    <button type="submit" class="d-block btn btn-light m-4">Mettre à jour</button>
                </div>
            </form>
            <p>
                <a href="/">HOME</a>
            </p>
        </div>

    </div>

</body>

</html>
