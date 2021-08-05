<?php 
	$Page = "SSH";
	$Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>
<ul id="sidebar">
    <li>
        <a href="./files.php"><h2>SFTP</h2></a>
    </li>
    <li>
        <a href="./ssh.php"><h2>SSH</h2><?php echo '<img src="' . $Path . 'assets/images/bullet.png" alt="bullet">'?></a>
    </li>
    <li>
        <a href="./permissions.php"><h2>File Ownership and Permissions</h2></a>
    </li>
</ul>

    <main>
    <h1>ssh</h1>
    <p>This command is used to start the SSH client program, safely connecting to the SSH server on the remote machine. The ssh command is used for logging in to a remote device, transfer files between two machines, and execute commands on the remote machine.</p>
    <div>
        <ul>
                <h3>To login to a remote server:</h3>
            <div class="demo"> 
                <ul>
            <li>“ssh -l username remote-server” OR ssh “username@remote-server”</li>
            <li>(Enter password)</li>
                </ul>
            </div>
                <h3>To logout</h3>
            <div class="demo"> 
            <ul>
            <li>“exit”</li>
            </ul>
            </div>
                <h3>To run remote commands without leaving the local server</h3>
             <div class="demo"> 
            <ul>
            <li>ssh user@remote-host “test”</li>
            <li>online-backup.dat</li>
            <li>oracle-storage.bat</li>
            <li>unix-dedicated-server.txt</li>
            <li>This connects to the host, runs the command and writes the output into the txt file</li>
            </ul>
            </div>
                <h3>To debug</h3>
             <div class="demo"> 
                 <ul>
            <li>“ssh -v user@remote-host”</li>
                 </ul>
            </div>
        </ul>
    </div>
    <?php
            $question = "Which of these commands allows you to log into a remote server?";
            $qnumber = 1;
            $Option1 = "ssh -l";
            $Option2 = "exit";
            $Option3 = "ssh -v";
            $Option4 = "ssh -login";
            $Answer = "option1";
          	include($Path.'assets/inc/quiz/multiple_choice.php');
           ?>
    </main>

<?php
    $Path = "../";
  $Left = "./files.php";
  $Right = "./permissions.php";
include($Path.'assets/inc/footer.php'); ?>
