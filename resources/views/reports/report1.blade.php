<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Report1</h1>
  <ul>
    @foreach ($data as $d)
      <li>{{ $d->officeCode }} : {{ $d->city }}</li>
    @endforeach
  </ul>
</body>

</html>
