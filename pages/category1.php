<?php 
	$Page = "Files";
	$Path = "../";
    $Style = $Path."/assets/css/dynamicstyle.css";
include($Path.'assets/inc/nav.php'); ?>
    

    <main>
        <h1 class="font-sfprodsb f-34">Category Heading</h1>
        <p>
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
            Welcome to this area of the site where we will type something important for you to read. There will be some links below here for navigation purposes. 
        </p>
        <h2 class="font-sfprodsb f-22">
            Subcategory 1
        </h2>
        <p>
            This will have a brief overview of the content for this subcategory and then a link to the page containing that content. This will have a brief overview of 
            the content for this subcategory and then a link to the page containing that content. This will have a brief overview of the content for this subcategory and 
            then a link to the page containing that content. This will have a brief overview of the content for this subcategory and then a link to the page containing that content. 
        </p>

        <a class="pagelink a-style" href="lesson1.php"><p>Link to Subcategory</p></a>
    </main>
    <ul class="list-none d-flex" id="sidebar">
        <li class="m-0-10">
            <a href="./pages/lesson1.php"><button class="white-btn font-sfprotsb f-17">Lesson 1</button></a>
        </li>
        <li class="m-0-10">
            <a href="./pages/lesson2.php"><button class="white-btn font-sfprotsb f-17">Lesson 2</button></a>
        </li>
        <li class="m-0-10">
            <a href="./pages/lesson3.php"><button class="white-btn font-sfprotsb f-17">Lesson 3</button></a>
        </li>
    </ul>
</body>
<?php 
    $Path = "../";
    $Style = $Path."/assets/css/category.css";
include($Path.'assets/inc/footer.php'); ?>