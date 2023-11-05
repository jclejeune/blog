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
                <a href="{{ url('/posts/create') }}" style="text-decoration:none !important">Nouveau Post++</a>
            </h1>

            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 40vw" scope="col" class="text-center align-middle">Title</th>
                        <th style="width: 40vw" scope="col" class="text-center align-middle">Content</th>
                        <th scope="col" class="text-center align-middle">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td class="text-center align-middle">{{ $post->title }}</td>
                        <td class="text-center align-middle">{{ $post->content }}</td>
                        <td class="d-flex flex-row">
                            <ul  class="list-group list-group-horizontal">
                              
                                <li class="list-group-item">
                                    <form >
                                        @csrf
                                        <button class="btn text-dark"><a href="{{ route('posts.show', $post) }}">View</a></button>
                                    </form>
                                </li>
                           
                                <li class="list-group-item">
                                    <form>
                                        @csrf
                                        <button class="btn text-dark"><a href="{{ route('posts.edit', $post) }}">Edit</a></button>
                                    </form>
                                </li>
                                <li class="list-group-item">
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn text-danger" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </li>
                            </ul>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="nav navbar text-center align-middle d-flex row">
                <a href="/">Home</a>
            </div>
        </div>
    </div>

</body>

</html>