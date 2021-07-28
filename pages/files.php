
<?php 
	$Page = "Files";
	$Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>
</header>

<main>
	<h1>File Management</h1>
	<p>
	This lesson will cover the ways in which you can alter and move files using UNIX.  
        </p>
        <h2>SFTP</h2>
        <p>
        SFTP stands for SSH File Transfer Protocol. SFTP is used to access, move, and transfer files via encrypted SSH transport. 
	In order to use SFTP you require write permissions on the system you are trying to transfer files to. 
	As a subsystem of SSH, SFTP works on a client-server model and supports all the authentication mechanisms of SSH. 
		
	In order to use the SFTP command you must start by opening a connection to the remote server using the username and IP address or domain of that server
	<ul>
		<li>“sftp remote_username@server_ip_or_hostname”</li>
		<li>You will be prompted for a password if the server you are connecting to uses password authentication.</li>
		<li>By default this command assumes the server is listening on port 22. If this is not the case, you can specify the SFTP port by altering the command like this:</li>
		<li>“sftp -P custom_port remote_username@server_ip_or_hostname”</li>
	</ul>
	After you establish a connection you will be able to enter commands on the remote system with sftp. 

	Common commands:
	
	<ul>
		<li>“bye”: exits the program</li>
		<li>“pwd”: accesses the current working directory.</li>
		<li>“ls”: lists all files and directories.</li>
		<li>“cd”: changes the directory.</li>
	</ul>
	
	Other commands that you may need can be found with the “help” command, which will list all of the available commands with SFTP.

	SFTP allows for transfer of files between machines securely. 
	This process works similar to the way you would use a system with GUI like FileZilla or WinScp. 
	SFTP is useful when transferring files on a machine with no GUI.

	You can download files from the remote system using the command:
	<ul>
		<li>“sftp>get filename.zip”</li>
		<li>You can also grab whole directories using “get -r”:</li>
		<li>“sftp>get -r remote_directory”</li>
		<li>Alternatively you can add files to a remote system using the command:M.</li>
		<li>“sftp>put filename.zip”</li>
		<li>As well as place entire directories: “sftp>put -r local_directory”</li>
	</ul>
        </p>
	<h2>Nano/Vi</h2>
	<p>Nano and Vi or both command-line text editors for UNIX. Both operate in a similar fashion except that Vi is blank with no visible controls, 
	while nano displays the possible controls to the user on startup. They both allow a user to edit text files from command-line. 
    
	Starting up either system is done the same way. By first typing out the name of the program followed by the text file that you want to edit.

	“nano filename” or “vi filename”
		
	After you open the file, If you use Vi, these are the commands you should know:
	
	<ul>
		<li>“:w”: saves the file</li>
		<li>“:wq”: or “:x”: will quit and save</li>
		<li>“:q”: will quit</li>
		<li>“:q!”: will force quit (if you are stuck in a read only file)</li>
	</ul>
	
    	The main challenge with Vi is navigating through text files which is done with a series of other commands:
	
	<ul>
		<li>j -  down</li>
		<li>k- up</li>
		<li>l- right</li>
		<li>h- left</li>
		<li>gg- Takes you to the beginning of the file</li>
		<li>G(shift + g)- Will take you to the end of the file</li>
		<li>xxG- Brings you to a specific line in the file(xx is the line number)</li>
		<li>(- Move up to the beginning of the sentence</li>
		<li>)- Move to the end of a sentence</li>
	</ul>
	

	The commands for adding text are:
	<ul>
		<li>i- insert before cursor</li>
		<lu>a- insert after cursor</li>
		<li>r- replace letter</li>
		<li>o- open line below cursor goes into insert mode</li>
		<li>O- open line above cursor goes into insert mode</li>
	</ul>
	
	The commands for deleting text are:
	<ul>
		<li>x- deletes character under cursor</li>
		<li>X- deletes character before cursor</li>
		<li>dw- deletes word after cursor</li>
		<li>db- deletes word before cursor</li>
		<li>u- undo</li>
	</ul>	
	These commands Copy, or “Yank”:
	<ul>
		<li>yw- yanks word after cursor</li>
		<li>yb- yanks word before cursor</li>
		<li>yy- yanks line</li>
		<li>p- pastes</li>
		<li>P- pastes before cursor position.</li>
	</ul>
	The last command is “/” which searches for the word that you type after it.
	If you use Nano you can operate the text file as you would with a normal text 
	editor except moving the cursor with the arrow-keys instead of the mouse. '
	The commands for nano are listed at the bottom of the screen for you to use.</p>
    </main>

</body>
<?php 
	$Path = "../";
include($Path.'assets/inc/footer.php'); ?>
