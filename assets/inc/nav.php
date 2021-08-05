<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" <?php echo "href='".$Path."assets/css/dynamicstyle.css'" ?>>
    <link rel="stylesheet" <?php echo "href='".$Style."'"?>>
    <script type="text/javascript" <?php echo "src='".$Path."assets/js/nav.js'" ?>></script>
    <script type="text/javascript" <?php echo "src='".$Path."assets/js/quiz.js'" ?>></script>
    <title><?php echo $Page; ?></title>
</head>
<body>
    <nav class="topnav" id="myTopnav">
    <a <?php echo "href='".$Path."index.php'"?>>
        <img class="smalllogo" <?php echo "src='".$Path."assets/images/logo-1.png'"?> alt="logo" width="60" height="60">
    </a>
    <a class="homebtn" <?php echo "href='".$Path."'"?>>Home</a>
    <div class="dropdown">
        <button class="dropbtn"><a class="nav-item" <?php echo "href='".$Path."pages/category1.php'" ?>> Introduction to Unix &nbsp; <i class="arrow down"></i>
        <i class="fa fa-caret-down"></i>
        </a></button>
        <div class="dropdown-content">
        <a <?php echo "href='".$Path."pages/definition.php'" ?>>What is Unix?</a>
        <a <?php echo "href='".$Path."pages/howto.php'" ?>>How to Use</a>
        <a <?php echo "href='".$Path."pages/important.php'" ?>>Why is Unix Important?</a>
        </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn"><a class="nav-item" <?php echo "href='".$Path."pages/category2.php'" ?>>Basics of Unix  &nbsp;<i class="arrow down"></i>
        <i class="fa fa-caret-down"></i>
        </a></button>
        <div class="dropdown-content">
        <a <?php echo "href='".$Path."pages/basic_commands.php'" ?>>Basic Unix Commands</a>
        <a <?php echo "href='".$Path."pages/commands.php'" ?>>Other Commands</a>
        <a <?php echo "href='".$Path."pages/navigation.php'" ?>>Navigation</a>
        </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn"><a class="nav-item" <?php echo "href='".$Path."pages/category3.php'" ?>>Advanced Unix  &nbsp;<i class="arrow down"></i>
        <i class="fa fa-caret-down"></i>
        </a></button>
        <div class="dropdown-content">
        <a <?php echo "href='".$Path."pages/files.php'" ?>>SFTP</a>
        <a <?php echo "href='".$Path."pages/ssh.php'" ?>>SSH</a>
        <a <?php echo "href='".$Path."pages/permissions.php'" ?>>File Ownership and Permissions</a>
        </div>
    </div> 
        
      <a  href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</nav>
    
