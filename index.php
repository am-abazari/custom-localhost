<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>localhost</title>
    <link rel="icon" href="./icon.ico">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li id="workspace"><a href="#">Workspace</a></li>
            <li id="phpmyadmin"><a target="_blank" href="http://localhost/phpmyadmin"><span
                            id="php">php</span>MyAdmin</a></li>
        </ul>
    </nav>
</header>


<div class="container">
    <div id="main">
        <?php
        $dir = './';
        foreach (scandir($dir) as $value) {
            if ($value != ".git" && $value != "icon.ico" && $value != "icon.ico" && $value != ".idea" && $value != "index.css" && $value != "index.php" && $value != "Deleted" && $value != "." && $value != "..") {
                echo "
                    <div class='dir-item'>
                        <div class='inner-values'>
                            <a target='_blank' href='http://localhost/$value' class='values'>$value</a>
                            ";
                foreach (scandir("./$value/") as $inner) {
                    if ($inner != "." && $inner != "..") {
                        echo '<i class="fa-solid fa-caret-right arrows"></i>';
                        echo "
                            <a target='_blank' href='./$value/$inner'><p class='inner-item'>$inner</p></a>
                        ";
                    }
                }
                echo "
                        </div>
                        <a target='_blank' href='http://localhost/$value' class='enter'>Enter</a>
                    </div> 
                ";
            }
        } ?>
    </div>
</div>


<footer>
    <p>COPYRIGHT © <?php echo date("Y"); ?> <a target="_blank" href="http://www.amabazari.ir">Amirhossein
            Abazari </a>, All rights Reserved</p>
</footer>

<script src="https://kit.fontawesome.com/9c52f206ce.js" crossorigin="anonymous"></script>
</body>
</html>


