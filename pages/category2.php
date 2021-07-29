<?php 
	$Page = "Basics of UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/dynamicstyle.css";
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
        <h1>Category Heading</h1>
        <p>
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
        </p>
        <h2>
            Subcategory 1
        </h2>
        <p>
            This will have a brief overview of the content for this subcategory and then a link to the page containing that content. This will have a brief overview of 
            the content for this subcategory and then a link to the page containing that content. This will have a brief overview of the content for this subcategory and 
            then a link to the page containing that content. This will have a brief overview of the content for this subcategory and then a link to the page containing that content. 
        </p>
    </main>
</body>
<?php
    $Path = "../";
  $Left = "./important.php";
  $Right = "./basic_commands.php";
include($Path.'assets/inc/footer.php'); ?>