<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="censure.php" method="GET">
        <div class="">
            <label for="paragraph">Inserire testo</label>
            <input type="textarea" rows="5" cols="30" name="paragraph" id="paragraph">

        </div>
        <div>
            <label for="badword">Parola da censurare</label>
            <input type="text" name="badword" id="badword">

        </div>

        <button type="submit">Invia</button>
    </form>
</body>

</html>