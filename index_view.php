<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>
            <ul>
                <?php foreach ($names as $name) : ?>
                    <li><?= $name; ?></li>
                <?php endforeach; ?>

                <?php        
                    foreach ($names as $name){
                        echo '<li>' . $name . '</li>';
                    }
                ?>
            </ul>
        </h1>
    </header>
</body>
</html> 