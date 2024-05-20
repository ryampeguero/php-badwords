<?php 
$par = $_GET["paragraph"];
$badword = $_GET["badword"];

$censure_par = str_replace($badword, "***", $par);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Torna indietro</a>
    <section>
        <h2>Paragrafo Normale: </h2>
        <p><?php echo $par; ?></p>
        <h5>Lunghezza: <?php echo strlen($par);?></h5>
    </section>

    <section>
        <h2>Paragrafo Censurato: </h2>
        <p><?php echo $censure_par; ?></p>
        <h5>Lunghezza: <?php echo strlen($censure_par);?></h5>
    </section>

</body>
</html>