

<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>
    <form action="{{ url('add-post') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title"><br>
        </div>
        <div>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content"></textarea><br>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
