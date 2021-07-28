
        <?php 
            $Page = "Commands";
            $Path = "../";
            $Style = $Path."/assets/css/content.css";
        include($Path.'assets/inc/nav.php'); ?>
    </header>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="/assets/js/loadnav.js"></script>

    <main>
        <h1>Commands in UNIX</h1>
        <p>
        There are many different commands you will need to know in order to effectively make use of all that UNIX has to offer. 
	In this section, some of the most common commands available in UNIX are going to be covered.
        </p>
        <h2>
        SSH
        </h2>
        <p>
        This command is used to start the SSH client program, safely connecting to the SSH server on the remote machine. 
	The ssh command is used for logging in to a remote device, transfer files between two machines, and execute commands on the remote machine.
        </p>
	<a href="link_to_ssh">SSH</a>
	<h2>
	Directories
	</h2>
	<p>
	Directory commands allow you to navigate through the directories and folders and look through files on your computer. 
	This lesson will allow you to become familiar with some of the most basic directory and navigation commands.
	</p>
	<a href="like_to_directory">Directories</a>
	<h2>
	File Managment
	</h2>
	<p>
	This lesson will explain how to edit and move your files using UNIX.
	</p>
	<a href="link_to_files">File Management</a>
	
    </main>
</body>
<?php 
    $Path = "../";
    include($Path.'assets/inc/footer.php'); 
?>
