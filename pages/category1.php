<?php 
	$Page = "Files";
	$Path = "../";
    $Style = $Path."/assets/css/dynamicstyle.css";
include($Path.'assets/inc/nav.php'); ?>
    <ul id="sidebar">
        <li>
            <a href="./pages/lesson1.php"><h2>Lesson 1</h2></a>
        </li>
        <li>
            <a href="./pages/lesson2.php"><h2>Lesson 2</h2></a>
        </li>
        <li>
            <a href="./pages/lesson3.php"><h2>Lesson 3</h2></a>
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
        <a class="pagelink" href="lesson1.php"><p>Link to Subcategory</p></a>
    </main>
</body>
<?php 
    $Path = "../";
    $Style = $Path."/assets/css/category.css";
include($Path.'assets/inc/footer.php'); ?>