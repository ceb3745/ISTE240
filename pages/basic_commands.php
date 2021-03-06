<?php
    $Page = "Basic Commands";
    $Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>


<ul id="sidebar">
        <li>
            <a href="./basic_commands.php"><h2>Basic Unix Commands</h2><?php echo '<img src="' . $Path . 'assets/images/bullet.png" alt="bullet">'?></a>
        </li>
        <li>
            <a href="./commands.php"><h2>Other Commands</h2></a>
        </li>
        <li>
            <a href="./navigation.php"><h2>Navigation</h2></a>
        </li>
    </ul>
        <main>
        <h1>Basic UNIX Commands</h1>
        <div>
            <h3>ls</h3>
            <div class="demo"> 
            <ul>
                <p>ls means list; it writes out selected information</p>
                <li>ls-a: shows all files (files starting with . may be hidden)</li>
                <li>ls-l: lists directory contents in a long format</li>
                <li>ls-d: lists information about files in the directory</li>
                <li>ls-s: prints the size of each file</li>
                <li>ls-S: sorts files by size</li>
                <p>There are many other ls commands, but these are the most commonly used</p>
            </ul>
            </div>
            <h3>Other commands</h3>
            <div class="demo"> 
            <ul>
                <li>touch: creates an empty file</li>
                <li>mv file1 file 2: renames file1 to file2</li>
                <li>cp -r file1 file2: copies the contents of file 1 to file 2</li>
                <li>cp -R dir1 dir2: copies the contents of the first directory to the second</li>
                <li>rm file: deletes the file</li>
                <li>rm dir: deletes the directory</li>
                <li>cat file1 file2: prints the files to the screen</li>
            </ul>
            </div>
        </div>
        <?php
            $question = "Which command brings up all the paths (files and directories) that the user can go to? ";
            $qnumber = 1;
            $Option1 = "is";
            $Option2 = "ls";
            $Option3 = "showpaths";
            $Option4 = "givepaths";
            $Answer = "option2";
          	include($Path.'assets/inc/quiz/multiple_choice.php');
           ?>
        
</main>
            
 <?php 
  $Path = "../";
  $Left = "./category2.php";
  $Right = "./commands.php";
  include($Path.'assets/inc/footer.php');
 ?>