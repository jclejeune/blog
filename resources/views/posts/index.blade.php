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
        <div class="card m-4 pb-4">
            <h1 class="text-center">
                <a href="{{ url('/posts/create') }}" style="text-decoration:none !important">Nouveau Post</a>
            </h1>

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 40vw" scope="col">Title</th>
                        <th style="width: 40vw" scope="col">Content</th>
                        <th style="width: 20vw" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <ul class="navbar-nav d-flex mb-3">
                                <li class="nav-item">
                                    <a href="{{ route('posts.show', $post) }}">View</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p>
                <a href="/">HOME1</a>
            </p>
        </div>
    </div>

</body>

</html>