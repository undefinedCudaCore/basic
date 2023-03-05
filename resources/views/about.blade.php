<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
</head>
<body>
    <h1>This is about page - loaded from demo controller</h1>
    <a style="margin-right:20px" href="{{ route('welcome.page') }}">Welcome</a>
    <a href="{{ route('contact.page') }}">Contact</a>
</body>
</html>