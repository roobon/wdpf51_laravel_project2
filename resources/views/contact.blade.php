<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Contact Form</h1>
  <form method="post" action="{{ route('sendMsg') }}">
    @csrf
    <input type="text" name="sender_name"><br>
    <input type="email" name="sender_email"><br>
    <textarea name="message" id="" cols="30" rows="10">
    </textarea><br>
    <input type="submit" name="submit" value="SEND">
  </form>
</body>

</html>
