<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veiksmīgi reģistrējies!</title>
</head>
<body>
    <?php
        echo "{$_REQUEST['name']}, Jūs
        esat veiksmīgi reģistrējusies(-ies)
        webināram ar e-pastu {$_REQUEST['e-mail']}"
    ?>
</body>
</html>