<?php 
	$Page = "Advanced UNIX";
	$Path = "../";
    $Style = $Path."/assets/css/dynamicstyle.css";
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
  $Left = "./navigation.php";
  $Right = "./files.php";
include($Path.'assets/inc/footer.php'); ?>