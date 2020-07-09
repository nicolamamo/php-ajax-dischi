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
                <p><?php echo $disco['author'] ?></p>
                <p><?php echo $disco['genre'] ?></p>
                <p><?php echo $disco['year'] ?></p>
            </div>
        <?php } ?>
        </div>
    </div>
    </body>
</html>
