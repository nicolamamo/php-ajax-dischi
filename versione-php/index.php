<?php include 'database/dischi.php' ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>dischi</title>
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
    <div class="container">
        <div class="cds-container">
        <?php
        foreach ($dischi as $disco ) { ?>
            <div class="cd">
                <img src="<?php echo $disco['poster'] ?>" alt="">
                <h3><?php echo $disco['title'] ?></h3>
                <p><?php echo $dico['author'] ?></p>
                <p><?php echo $dico['genre'] ?></p>
                <p><?php echo $dico['year'] ?></p>
            </div>
        }

    </div>
    </body>
</html>
