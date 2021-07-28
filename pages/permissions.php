<?php
    $Page = "Permissions";
    $Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>
    
    <body>
        <h1>Permissions</h1>
        <ul>
        <p>ls-l shows a series of 10 characters next to files and directories</p>
            <p>The first character signifies the type</p>
            <li>A dash(-) is a regular file, d is a directory, and l is a symbolic link</li>
            
            <p>The rest give ownership permission</p>
            <li>Permissions are r (read), w (write), and x(execute)</li>
            <li>r, w and x all have numerical values</li>
            <ul>
                <li>r=4</li>
                <li>w=2</li>
                <li>x=1</li>
            </ul>
            <p>numerical permissions can be given</p>
            <li>775 is common</li>
            <ul>
                <li>The first 7 (4+2+1) gives all permissions to the user</li>
                <li>The second 7 gives all permissions to the group</li>
                <li>The 5 (4+1) gives read and execute permissions to others</li>
            </ul>
            <p>Symbolic permissions can be given to the user (u), group (g), or others (o)</p>
            <p>Operations can be used to alter permissions</p>
            <ul>
                <li>+: add symbolic-combo to file/directory</li>
                <li>-: subtract symbolic-combo from file/directory</li>
                <li>=: set file/directory to symbolic-combo</li>
            </ul>
        </ul>
        <h3>Examples</h3>
        <ul>
            <li>Chmod uo+w dir		Adds write permissions to user and others</li>
            <li>Chmod a=rwx		Sets all permissions to rwx</li>
        </ul>
    </body>
<?php
    $Path = "../";
include($Path.'assets/inc/footer.php'); ?>
