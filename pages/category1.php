<?php 
	$Page = "Introduction to UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/dynamicstyle.css";
include($Path.'assets/inc/nav.php'); ?>
    <ul id="sidebar">
        <li>
            <a href="./definition.php"><h2>What is UNIX</h2></a>
        </li>
        <li>
            <a href="./howto.php"><h2>How to Use</h2></a>
        </li>
        <li>
            <a href="./important.php"><h2>Why is UNIX important</h2></a>
        </li>
    </ul>

    <main>
        <h1>Category 1 -- Introduction to Unix</h1>
        <p>
            Welcome to the Category 1!
        <br>
            In this tutorial, you will get basic concepts of Unix, how to open this application, and why Unix is essential to learn.

        </p>
        <h2>
            Lessons 
        </h2>

            <ul id="lessons">
        <li>
            <a href="./definition.php">What is UNIX</a>
        </li>
        <li>
            <a href="./howto.php">How to Use</a>
        </li>
        <li>
            <a href="./important.php">Why is UNIX important</a>
        </li>
    </ul>
            
   
    </main>

<?php
    $Path = "../";
  $Left = "";
  $Right = "./definition.php";
include($Path.'assets/inc/footer.php'); ?>