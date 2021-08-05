<?php 
	$Page = "Basics of UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/category.css";
include($Path.'assets/inc/nav.php'); ?>
    <ul id="sidebar">
        <li>
            <a href="./basic_commands.php"><h2>Basic Unix Commands</h2></a>
        </li>
        <li>
            <a href="./commands.php"><h2>Other Commands</h2></a>
        </li>
        <li>
            <a href="./navigation.php"><h2>Navigation</h2></a>
        </li>
    </ul>

    <main>
        <h1>Category 2 -- Basics of Unix</h1>
        <p>
            In this tutorial, you will get to know how to work with Unix Commands.
        </p>
        <ul>
                <li>Some basic commands of Is</li>
                <li>Other commands to work with processes</li>
                <li>Commands to work with the SSH, Directories and File system</li>
                <li>cp -R dir1 dir2: copies the contents of the first directory to the second</li>
                <li>Navigation commands</li>
            </ul>
        <h2>
            Lessons
        </h2>
        
    <div class="card-main">
          <div class="card">
  
            <div class="card-content">
              <a href="./basic_commands.php">
                <p class="card-category  font-sfprotsb f-17">Basic Unix Commands<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
          </div>
  
          <div class="card">
  
            <div class="card-content">
              <a href="./commands.php">
                <p class="card-category  font-sfprotsb f-17">Other Commands<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
          </div>
          <div class="card">
  
            <div class="card-content">
              <a href="./navigation.php">
                <p class="card-category  font-sfprotsb f-17">Navigation<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
        </div>
    </div>
    </main>

<?php
    $Path = "../";
  $Left = "./important.php";
  $Right = "./basic_commands.php";
include($Path.'assets/inc/footer.php'); ?>