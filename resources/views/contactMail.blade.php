<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h2>Hey, It's me {{ $mailData['senderName'] }}</h2>
  <br>

  <strong>User details: </strong><br>
  <strong>Name: </strong>{{ $mailData['senderName'] }} <br>
  <strong>Email: </strong>{{ $mailData['senderEmail'] }} <br>
  <strong>Message: </strong>{{ $mailData['message'] }} <br>
  <br><br>

  Thank you

</body>

</html>
