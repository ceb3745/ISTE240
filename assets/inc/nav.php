<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" <?php echo "href='".$Path."assets/css/style.css'" ?>>
    <link rel="stylesheet" <?php echo "href='".$Style."'"?>>
    <title><?php echo $Page; ?></title>
</head>
<body>
<nav>
    <a <?php echo "href='".$Path."index.php'"?>>
        <img id="logo" <?php echo "src='".$Path."assets/images/logo.png'"?> alt="logo">
    </a>
    <ul>
        <li>
            <div class="category">
                <a <?php echo "href='".$Path."pages/category1.php'"?>><h1>Category 1</h1></a>
                <img class="dropdown" <?php echo "src='".$Path."assets/images/dropdown.png'"?> alt="dropdown arrow">
            </div>
            <ul>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson1.php'"?>><h2>Lesson 1</h2></a>
                </li>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson2.php'"?>><h2>Lesson 2</h2></a>
                </li>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson3.php'"?>><h2>Lesson 3</h2></a>
                </li>
            </ul>
        </li>
        <li>
            <div class="category">
                <a <?php echo "href='".$Path."pages/category2.php'"?>><h1>Category 2</h1></a>
                <img class="dropdown" <?php echo "src='".$Path."assets/images/dropdown.png'"?> alt="dropdown arrow">
            </div>
            <ul>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson1.php'"?>><h2>Lesson 1</h2></a>
                </li>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson2.php'"?>><h2>Lesson 2</h2></a>
                </li>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson3.php'"?>><h2>Lesson 3</h2></a>
                </li>
            </ul>
        </li>
        <li>
            <div class="category">
                <a <?php echo "href='".$Path."pages/category3.php'"?>><h1>Category 3</h1></a>
                <img class="dropdown" <?php echo "src='".$Path."assets/images/dropdown.png'"?> alt="dropdown arrow">
            </div>
            <ul>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson1.php'"?>><h2>Lesson 1</h2></a>
                </li>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson2.php'"?>><h2>Lesson 2</h2></a>
                </li>
                <li>
                    <a <?php echo "href='".$Path."pages/lesson3.php'"?>><h2>Lesson 3</h2></a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
