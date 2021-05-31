<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm">

            <form action="?" method="POST">
                <label for="exampleFormControlTextarea1" class="form-label">Оставьте своё сообщение:</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                          placeholder="ваше сообщение" rows="5"></textarea>
                <br>
                <label for="exampleFormControlTextarea1" class="form-label">Оставьте Ваше имя:</label>
                <input class="form-control" name="name" type="text" placeholder="ваше имя"
                       aria-label="default input example">
                <br>
                <input type="submit" class="btn btn-primary" value="send">
            </form>

        </div>
        <div class="col-sm"></div>
    </div>
</div>

</body>
</html>