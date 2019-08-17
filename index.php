<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>
<form action="index.php" method="post">
    <p>
    <label for="name">Имя:</label><br>
    <input type="text" name="name" id="name">
    </p>
    <p>
    <label for="text">Текст:<br>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
    </p>
    <button type="submit">ОТПРАВИТЬ</button>
</form>
</body>
</html>