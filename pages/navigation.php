<?php 
	$Page = "Navigation";
	$Path = "../";
    $Style = $Path."/assets/css/content.css";
include($Path.'assets/inc/nav.php'); ?>
    
    <ul id="sidebar">
        <li>
            <a href="./basic_commands.php"><h2>Basic Unix Commands</h2></a>
        </li>
        <li>
            <a href="./commands.php"><h2>Other Commands</h2></a>
        </li>
        <li>
            <a href="./navigation.php"><h2>Navigation</h2><?php echo '<img src="' . $Path . 'assets/images/bullet.png" alt="bullet">'?></a>
        </li>
    </ul>

        <main>
        <h1>Navigation</h1>
        <div><h3>Heirarchy</h3>
            <p>Sibling directories exist in the same directory
                Parent directories have other directories inside of them
                Child directories are inside of a parent directory</p>
        </div>
        <div>
            <h3>Absolute Path</h3>
            <p>Starts with “/”
                Unless the desired location is in the current working directory, you must start with “/home”, and work down.
                “/” separates every directory/file</p>
        </div>
        <div>
            <h3>Relative Path</h3>
            <p>Parent to child: cd DirectoryName
                Child to parent: cd ..
                Sibling to sibling: cd ../DirectoryName
                To home directory: ~ or cd
                Use pwd (print working directory) to show where you are</p>
        </div>
        <div>
            <h3>Commands</h3>
               <div class="demo"> 
            <ul>
                <li>cd: change directory</li>
                <li>mkdir pathname: creates a new, empty directory at the given point</li>
                <li>rm pathname: removes non-empty directory</li>
                <li>rmdir pathname: removes empty directory</li>
                <li>ls pathname: lists contents of the given directory</li>
            </ul>


</div>
        </div>

    
        <?php
            $question = "To check the current directory and the path it took to get there, what would the user type in?";
            $qnumber = 1;
            $Option1 = "path";
            $Option2 = "cd";
            $Option3 = "pwd";
            $Option4 = "ls";
            $Answer = "option3";
          	include($Path.'assets/inc/quiz/multiple_choice.php');
           ?>
    </main>
<?php
  $Path = "../";
  $Left = "./commands.php";
  $Right = "./category2.php";
include($Path.'assets/inc/footer.php'); ?>
</main>
