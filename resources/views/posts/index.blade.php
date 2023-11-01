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

    <!-- resources/views/posts/index.blade.php -->
    <div class="container mx-auto" style="background-color: white">
    <h1><span>All Posts</span> - <span><a href="{{ url('/posts/create') }}">Blog</a></span> </h1>


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    <a href="{{ route('posts.show', $post) }}" class="col-span-2">View</a>
                    <span> - </span>
                    <a href="{{ route('posts.edit', $post) }}" class="col-span-2">Edit</a>
                    <span> - </span>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
    </div>
</body>

</html>