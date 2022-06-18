<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>
            <?php 
                // echo "Name is {$_GET['name']}";
                $name = htmlspecialchars($_GET['name']);
                echo "Name is {$name}";
            ?>
        </h1>
    </header>
</body>
</html> 