<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/posts" method="post">
        @csrf
        <div>
            <label for="Title"></label>
        <input type="text" name="title" id="title">
        <label for="Body"></label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <input type="submit" value="submit">
    </div>
    </form>
</body>
</html>