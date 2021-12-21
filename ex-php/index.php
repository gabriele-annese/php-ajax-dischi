
<?php include './data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo-ctn">
            <img src="../img/logo.png" alt="">
        </div>
    </header>
    <main>
        <section class="main-ctn">
            <?php foreach ($database as $element) {?> 
            <div class="card">
                    <div class="img-ctn">
                        <img src=" <?php echo $element['poster'] ?>" alt="">
                    </div>
                    <h3 class="title"> 
                        <?php echo $element['title']; ?>
                    </h3>
                    <p class="author">
                         <?php echo $element['author']; ?>
                    </p>
                    <p class="year">
                        <?php echo $element['year']; ?>
                    </p>
                    <p class="genre">
                        <?php echo $element['genre']; ?>
                    </p>
                </div>
            <?php } ?>
        </section>
    </main>
</body>
</html>