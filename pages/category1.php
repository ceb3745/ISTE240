<?php 
	$Page = "Introduction to UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/category.css";
include($Path.'assets/inc/nav.php'); ?>
    <ul id="sidebar">
        <li>
            <a href="./definition.php"><h2>What is UNIX</h2></a>
        </li>
        <li>
            <a href="./howto.php"><h2>How to Use</h2></a>
        </li>
        <li>
            <a href="./important.php"><h2>Why is UNIX important</h2></a>
        </li>
    </ul>

    <main>
        <h1 class="font-sfprodsb f-34">Category 1 -- Introduction to Unix</h1>
        <p>
            Welcome to the Category 1!
        <br>
            In this tutorial, you will get basic concepts of Unix, how to open this application, and why Unix is essential to learn.

        </p>
        <h2  class="font-sfprodsb f-22">
            Lessons 
        </h2>

        <div class="card-main">
          <div class="card">
  
            <div class="card-content">
              <a href="./definition.php">
                <p class="card-category  font-sfprotsb f-17">What is UNIX<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
          </div>
  
          <div class="card">
  
            <div class="card-content">
              <a href="./howto.php">
                <p class="card-category  font-sfprotsb f-17">How to Use<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
          </div>
          <div class="card">
  
            <div class="card-content">
              <a href="./important.php">
                <p class="card-category  font-sfprotsb f-17">Why is UNIX important<i class="fas fa-chevron-right fa-sm"></i></p>
              </a>
            </div>
        </div>
    </div>
            
   
    </main>

<?php
    $Path = "../";
  $Left = "";
  $Right = "./definition.php";
include($Path.'assets/inc/footer.php'); ?>