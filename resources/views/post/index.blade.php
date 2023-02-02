<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  @foreach ($posts as $post)
    <p>{{ $post->name }}</p>
    <ul>
      @foreach ($post->comments as $comment)
        <li>{{ $comment->comment }}</li>
      @endforeach
    </ul>
  @endforeach
</body>

</html>
