<?php 
	$Page = "Why is UNIX Important";
	$Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?> 
    
    
    <ul id="sidebar">
        <li>
            <a href="./definition.php"><h2>What is UNIX</h2></a>
        </li>
        <li>
            <a href="./howto.php"><h2>How to Use</h2></a>
        </li>
        <li>
            <a href="./important.php"><h2>Why is UNIX important</h2><?php echo '<img src="' . $Path . 'assets/images/bullet.png" alt="bullet">'?></a>
        </li>
    </ul>
    <main>
        <h1>Why is UNIX important?</h1>
        <p>UNIX is the operating system that LINUX comes from. LINUX is a family of variations and is owned and trademarked. UNIX, on the other hand, is open source, meaning anyone can use it for free. UNIX allows users to link remotely to other systems, and even originated the now commonly used heirarchy form.</p>
    </main>
<?php
  $Path = "../";
  $Left = "./commands.php";
  $Right = "./category2.php";
include($Path.'assets/inc/footer.php'); ?>
