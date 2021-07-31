
        <?php 
            $Page = "Home";
            $Path = "";
            $Style = $Path."/assets/css/main.css";
        include($Path.'assets/inc/nav.php'); ?>

    
    <main>
        <h1>Welcome to Unix!</h1>
        <p>
            Unix is a computer Operating System which is capable of handling activities from multiple users at the same time. In this UNIX tutorial for beginners series, we will be practicing it as it is freely available. The training will require you to execute certain commands. Make sure to practice them!</p>
            
        <h2>Prerequisites for learning UNIX Tutorial?</h2>
            <p>Nothing. This tutorial has been prepared for beginners to help them understand the basics to advanced concepts covering Unix commands and various utilities.</p>
    
        <p>By the end of this series, you will understand the basic and advanced concepts of Unix Architecture, Unix Commands, and the applications such as File Management, etc.</p>

       <h2>Courses for you to learn:</h2>
        <div id="categorylinks">
            <a class="categorylink" href="pages/category1.php">
                <p>Category 1</p>
            </a>
            <a class="categorylink" href="pages/category2.php">
                <p>Category 2</p>
            </a>
            <a class="categorylink" href="pages/category3.php">
                <p>Category 3</p>
            </a>
        </div>
    </main>
<?php
    $Path = "";
    $Right = "";
include($Path.'assets/inc/footer.php'); ?>