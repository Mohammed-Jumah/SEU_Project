<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h1> Hi Admin </h1>
    <p> You have new Email from: {{ $name }} </p>
    <p> Email: {{ $email }} </p>
    <p> Subject: {{ $subject }} </p>
    <hr/>
    <p> The message is: {{ $body }} </p>
</body>
</html>