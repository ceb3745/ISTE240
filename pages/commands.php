<?php 
	$Page = "Commands in UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>
    
    <ul id="sidebar">
        <li>
            <a href="./basic_commands.php"><h2>Basic Unix Commands</h2></a>
        </li>
        <li>
            <a href="./commands.php"><h2>Other Commands</h2><?php echo '<img src="' . $Path . 'assets/images/bullet.png" alt="bullet">'?></a>
        </li>
        <li>
            <a href="./navigation.php"><h2>Navigation</h2></a>
        </li>
    </ul>
    <main>
        
    <h2>touch file</h2>
<p>Creates an empty file or updates modification/access date.</p>
<h2>mv file1 file2</h2>
<p>Renames file1 to be file2</p>
<h2>cp file1 file2</h2>
<p>Copies file1 to file2</p>
<h2>cp-r dir1 dir2</h2>
<p>Copies directory dir1 and all of its contents to dir2</p>
<h2>rm file</h2>
<p>Deletes the file</p>
<h2>rmdir</h2>
<p>deletes a directory and all of its contents, recursively, to the bottom of the tree</p>
<h2>cat file1 file2</h2>
<p>Concatenates and prints the named files to the screen</p>
	
    <?php
            $question = "Which command allows the user to be able to read the contents of a file?";
            $qnumber = 1;
            $Option1 = "cat";
            $Option2 = "contents";
            $Option3 = "read";
            $Option4 = "rd";
            $Answer = "option1";
          	include($Path.'assets/inc/quiz/multiple_choice.php');
           ?>
    </main>
<?php 
    $Path = "../";
    $Left = "./basic_commands.php";
    $Right = "./navigation.php";
    include($Path.'assets/inc/footer.php'); 
?>
