<?php 
	$Page = "What is UNIX?";
	$Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>
    

    <ul id="sidebar">
        <li>
            <a href="./definition.php"><h2>What is UNIX</h2><?php echo '<img src="' . $Path . 'assets/images/bullet.png" alt="bullet">'?></a>
        </li>
        <li>
            <a href="./howto.php"><h2>How to Use</h2></a>
        </li>
        <li>
            <a href="./important.php"><h2>Why is UNIX important</h2></a>
        </li>
    </ul>
        <main>
        <h1>What is UNIX?</h1>
        <p>UNIX is an operating system that was first developed in the 1960s and has continued to evolve. The operating system refers to the suite of programs that make the computer work. It is a stable, multi-user, multi-tasking system suitable for servers, desktops and laptops.</p>
        <p>Unix has been ported to more machine families than any other operating system. Therefore, it is determined as an open system concept. Unix operating systems are widely used in personal computers, servers, and mobile devices. The Unix environment is also an essential element of the development of the Internet and the network.</p>
    
        <?php
            $question = "Which of these things can't use UNIX?";
            $qnumber = 1;
            $Option1 = "Personal Computers";
            $Option2 = "Mobile Devices";
            $Option3 = "Bananas";
            $Option4 = "Servers";
            $Answer = "option3";
          	include($Path.'assets/inc/quiz/multiple_choice.php');
           ?>        
    
    </main>


<?php
    $Path = "../";
    $Left = "./category1.php";
    $Right = "./howto.php";
include($Path.'assets/inc/footer.php'); ?>
