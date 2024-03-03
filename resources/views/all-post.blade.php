

<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
        <h1>
        @foreach ($posts as $post)
            <li>{{ $post->content }}</li>
        @endforeach
        </h1>
        
        <!-- <li>hello</li>
        <li>hello</li>
        <li>hello</li> -->
    </ul>
</body>
</html>
