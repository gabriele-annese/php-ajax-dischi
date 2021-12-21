
<?php include './data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <div class="container">
        <div class="card">
            <?php foreach ($database as $element) {?> 
                <div class="img-ctn">
                    <img src=" <?php echo $element['poster'] ?>" alt="">
                </div>
                <h3> 
                    <?php echo $element['title'] ?>
                </h3>

            <?php } ?>
        </div>
    </div>
</body>
</html>