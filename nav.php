<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" <?php echo "href='".$Path."/assets/css/style.css'" ?>>
    <link rel="stylesheet" <?php echo "href='".$Style."'"?>>
    <title><?php echo $Page; ?></title>
</head>
<body>
<nav>
    <a href="/index.html">
        <img id="logo" src="/assets/images/logo.png" alt="logo">
    </a>
    <ul>
        <li>
            <div class="category">
                <a href="/pages/category1.html"><h1>Category 1</h1></a>
                <img class="dropdown" src="/assets/images/dropdown.png" alt="dropdown arrow">
            </div>
            <ul>
                <li>
                    <a href="/pages/lesson1.html"><h2>Lesson 1</h2></a>
                </li>
                <li>
                    <a href="/pages/lesson2.html"><h2>Lesson 2</h2></a>
                </li>
                <li>
                    <a href="/pages/lesson3.html"><h2>Lesson 3</h2></a>
                </li>
            </ul>
        </li>
        <li>
            <div class="category">
                <a href="/pages/category2.html"><h1>Category 2</h1></a>
                <img class="dropdown" src="/assets/images/dropdown.png" alt="dropdown arrow">
            </div>
            <ul>
                <li>
                    <a href="/pages/lesson1.html"><h2>Lesson 1</h2></a>
                </li>
                <li>
                    <a href="/pages/lesson2.html"><h2>Lesson 2</h2></a>
                </li>
                <li>
                    <a href="/pages/lesson3.html"><h2>Lesson 3</h2></a>
                </li>
            </ul>
        </li>
        <li>
            <div class="category">
                <a href="/pages/category3.html"><h1>Category 3</h1></a>
                <img class="dropdown" src="/assets/images/dropdown.png" alt="dropdown arrow">
            </div>
            <ul>
                <li>
                    <a href="/pages/lesson1.html"><h2>Lesson 1</h2></a>
                </li>
                <li>
                    <a href="/pages/lesson2.html"><h2>Lesson 2</h2></a>
                </li>
                <li>
                    <a href="/pages/lesson3.html"><h2>Lesson 3</h2></a>
                </li>
            </ul>
        </li>
    </ul>
</nav>