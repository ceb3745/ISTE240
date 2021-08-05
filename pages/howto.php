<?php 
	$Page = "How to use UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>   

<ul id="sidebar">
        <li>
            <a href="./definition.php"><h2>What is UNIX</h2></a>
        </li>
        <li>
            <a href="./howto.php"><h2>How to Use</h2><?php echo '<img src="' . $Path . 'assets/images/bullet.png" alt="bullet">'?></a>
        </li>
        <li>
            <a href="./important.php"><h2>Why is UNIX important</h2></a>
        </li>
    </ul>
        <main>
        <h1>How to use UNIX</h1>
        <div>
            <h3>How to open Unix on Mac</h3>
            <p>The application Terminal takes you from the outer world of OS X to the inner world of UNIX and it is pre-installed on your Mac. To open it, double-click the Terminal icon, and you see the Terminal's working window.</p>
        </div>
        <div>
            <h3>How to open Unix on Windows</h3>
            <p>A free SSH client available for MS Windows computers called PuTTY can be used, but may need to be downloaded first. UNIX can also be used through Command Prompt, which is included in most Windows computers. The first step to do this is pressing WIN + R.</p>
        </div>
        <?php
            $question = "The very first step to open a terminal on a windows machine, the user should _______.";
            $qnumber = 1;
            $Option1 = "Press on the windows key and the r key simultaneously";
            $Option2 = "Open their file explorer";
            $Option3 = "Open up a web browser";
            $Option4 = "Just type in the word 'terminal' and have it appear";
            $Answer = "option1";
          	include($Path.'assets/inc/quiz/multiple_choice.php');
           ?>
            </main>
<?php
    $Path = "../";
  $Left = "./definition.php";
  $Right = "./important.php";
include($Path.'assets/inc/footer.php'); ?>
