<?php 
	$Page = "Advanced UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/category.css";
include($Path.'assets/inc/nav.php'); ?>
    <ul id="sidebar">
        <li>
            <a href="./files.php"><h2>SFTP</h2></a>
        </li>
        <li>
            <a href="./ssh.php"><h2>SSH</h2></a>
        </li>
        <li>
            <a href="./permissions.php"><h2>File Ownership and Permissions</h2></a>
        </li>
    </ul>

    <main>
        <h1>Category Heading</h1>
        <p>
            This tutorial will introduce you to the advanced Unix commands. We will dive deep into the Unix File system which is essential to understand Unix commands. This will include SFTP, SSH and File ownership and permissions
        <h2>
            Lessons
        </h2>
    <div class="card-main">
          <div class="card">
  
            <div class="card-content">
              <a href="./files.php">
                <p class="card-category  font-sfprotsb f-17">SFTP<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
          </div>
  
          <div class="card">
  
            <div class="card-content">
              <a href="./ssh.php">
                <p class="card-category  font-sfprotsb f-17">SSH<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
          </div>
          <div class="card">
  
            <div class="card-content">
              <a href="./permissions.php">
                <p class="card-category  font-sfprotsb f-17">File Ownership and Permissions<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
        </div>
    </div>
    </main>

<?php
    $Path = "../";
  $Left = "./navigation.php";
  $Right = "./files.php";
include($Path.'assets/inc/footer.php'); ?>