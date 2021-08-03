<?php 
   $Page = "Home";
   $Path = "";
   $Style = $Path."/assets/css/main.css";
   include($Path.'assets/inc/nav.php'); ?>
<main>
   <h1>Welcome to Unix!</h1>
   <p>
      Unix is a computer Operating System which is capable of handling activities from multiple users at the same time. In this UNIX tutorial for beginners series, we will be practicing it as it is freely available. The training will require you to execute certain commands. Make sure to practice them!
   </p>
   <h2>Prerequisites for learning UNIX Tutorial?</h2>
   <p>Nothing. This tutorial has been prepared for beginners to help them understand the basics to advanced concepts covering Unix commands and various utilities.</p>
   <p>By the end of this series, you will understand the basic and advanced concepts of Unix Architecture, Unix Commands, and the applications such as File Management, etc.</p>
   <h2>Courses for you to learn:</h2>
   <div class="card-main">
      <div class="card bg-card">
         <div class="card-content">
            <a href="pages/category1.php">
               <p class="card-category  font-sfprotsb f-17">Introduction to Unix<i class="fas fa-chevron-right fa-sm"></i></p>
            </a>
         </div>
      </div>
      <div class="card bg-card">
         <div class="card-content">
            <a href="pages/category2.php">
               <p class="card-category  font-sfprotsb f-17">Basics of Unix<i class="fas fa-chevron-right fa-sm"></i></p>
            </a>
         </div>
      </div>
      <div class="card bg-card">
         <div class="card-content">
            <a href="pages/category3.php">
               <p class="card-category  font-sfprotsb f-17">Advanced Unix<i class="fas fa-chevron-right fa-sm"></i></p>
            </a>
         </div>
      </div>
   </div>
</main>
<?php
   $Path = "";
   $Right = "pages/category1.php";
   include($Path.'assets/inc/footer.php'); ?>