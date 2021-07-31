<?php 
	$Page = "Basics of UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/dynamicstyle.css";
include($Path.'assets/inc/nav.php'); ?>
    <ul id="sidebar">
        <li>
            <a href="./basic_commands.php"><h2>Basic Unix Commands</h2></a>
        </li>
        <li>
            <a href="./commands.php"><h2>Other Commands</h2></a>
        </li>
        <li>
            <a href="./navigation.php"><h2>Navigation</h2></a>
        </li>
    </ul>

    <main>
        <h1>Category 2 -- Basics of Unix</h1>
        <p>
            In this tutorial, you will get to know how to work with Unix Commands.
        </p>
        <ul>
                <li>Some basic commands of Is</li>
                <li>Other commands to work with processes</li>
                <li>Commands to work with the SSH, Directories and File system</li>
                <li>cp -R dir1 dir2: copies the contents of the first directory to the second</li>
                <li>Navigation commands</li>
            </ul>
        <h2>
            Lessons
        </h2>
        
            <ul id="lessons">
        <li>
            <a href="./basic_commands.php">Basic Unix Commands</a>
        </li>
        <li>
            <a href="./commands.php">Other Commands</a>
        </li>
        <li>
            <a href="./navigation.php">Navigation</a>
        </li>
    </ul>
    </main>

<?php
    $Path = "../";
  $Left = "./important.php";
  $Right = "./basic_commands.php";
include($Path.'assets/inc/footer.php'); ?>