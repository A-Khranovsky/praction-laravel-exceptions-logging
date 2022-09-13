<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Authorization</title>
    <meta charset="utf-8">
</head>
<body>
<p><strong>Authorization</strong></p>
<form method="post" action="{{route('auth.login')}}">
    @csrf
    <p>E-mail: <input type="text" name="email"/></p>
    <p>Password: <input type="password" name="password"/></p>
    <input type="submit" value="Send">
</form>
</body>
</html>
