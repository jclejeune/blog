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
    <div  class="container d-flex justify-content-center">
        <div class="card m-4 p-4">
            <h1> Modifier "{{ $post->title }}"</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 40vw" scope="col">Title</th>
                        <th style="width: 40vw" scope="col">Content</th>
                        <th style="width: 20vw" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <nav class="navbar-nav d-flex mb-3">
                                <span class="nav-item">
                                    <a href="{{ route('posts.show', $post) }}">View</a>
                                </span>
                                <span class="nav-item">
                                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                                </span>
                                <span class="nav-item">
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </span>
                            </nav>
                        </td>
                    </tr>

                </tbody>
            </table>
            <p>
                <a href="/">HOME99</a>
            </p>
        </div>
    </div>
    </div>

</body>

</html>