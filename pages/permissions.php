<?php 
	$Page = "Permissions";
	$Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>
<ul id="sidebar">
    <li>
        <a href="./files.php"><h2>SFTP</h2></a>
    </li>
    <li>
        <a href="./ssh.php"><h2>SSH</h2></a>
    </li>
    <li>
        <a href="./permissions.php"><h2>File Ownership and Permissions</h2><?php echo '<img src="' . $Path . 'assets/images/bullet.png" alt="bullet">'?></a>
    </li>
</ul>
    

        <main>
        <br>
  <h1>Permissions</h1>
        <ul>
        <p>ls-l shows a series of 10 characters next to files and directories</p>
            <p>The first character signifies the type</p>
            <li>A dash(-) is a regular file, d is a directory, and l is a symbolic link</li>
            
            <p>The rest give ownership permission</p>
            <li>Permissions are r (read), w (write), and x(execute)</li>
            <li>r, w and x all have numerical values</li>
            <div class="demo"> 
            <ul>
                <li>r=4</li>
                <li>w=2</li>
                <li>x=1</li>
            </ul>
            </div>
            <p>numerical permissions can be given</p>
            <li>775 is common</li>
            <div class="demo"> 
            <ul>
                <li>The first 7 (4+2+1) gives all permissions to the user</li>
                <li>The second 7 gives all permissions to the group</li>
                <li>The 5 (4+1) gives read and execute permissions to others</li>
            </ul>
            </div>
            <p>Symbolic permissions can be given to the user (u), group (g), or others (o)</p>
            <p>Operations can be used to alter permissions</p>
            <div class="demo"> 
            <ul>
                <li>+: add symbolic-combo to file/directory</li>
                <li>-: subtract symbolic-combo from file/directory</li>
                <li>=: set file/directory to symbolic-combo</li>
            </ul>
            </div>
        </ul>
        <h3>Examples</h3>
        <ul>
            <li>Chmod uo+w dir		Adds write permissions to user and others</li>
            <li>Chmod a=rwx		Sets all permissions to rwx</li>
        </ul>
    </main>

<?php
    $Path = "../";
  $Left = "./ssh.php";
  $Right = "";
include($Path.'assets/inc/footer.php'); ?>
