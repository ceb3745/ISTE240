<?php
    $Page = "SSH";
    $Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>

    <h1>ssh</h1>
    <p>This command is used to start the SSH client program, safely connecting to the SSH server on the remote machine. The ssh command is used for logging in to a remote device, transfer files between two machines, and execute commands on the remote machine.</p>
    <div>
        <ul>
                <h3>To login to a remote server:</h3>
            <li>“ssh -l username remote-server” OR ssh “username@remote-server”</li>
            <li>(Enter password)</li>
                <h3>To logout</h3>
            <li>“exit”</li>
                <h3>To run remote commands without leaving the local server</h3>
            <li>ssh user@remote-host “test”</li>
            <li>online-backup.dat</li>
            <li>oracle-storage.bat</li>
            <li>unix-dedicated-server.txt</li>
            <li>This connects to the host, runs the command and writes the output into the txt file</li>
                <h3>To debug</h3>
            <li>“ssh -v user@remote-host”</li>
        </ul>
    </div>

<?php
    $Path = "../";
include($Path.'assets/inc/footer.php'); ?>
