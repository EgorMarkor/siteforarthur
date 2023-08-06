<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page with zakaz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <script src="https://telegram.org/js/telegram-web-app.js"></script>
</head>
<body>
  <img id='photka' src="<?=$_COOKIE['photo']?>" alt="">
  <h3 id="identification"><?=$_COOKIE['user']?></h3>
  <p id='price'><?=$_COOKIE['user']?></p>
  <button type="button" name="button">Оплатить</button>
</body>
</html>
