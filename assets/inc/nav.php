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
    <div class="topnav" id="myTopnav">
    <a <?php echo "href='".$Path."index.php'"?>>
        <img class="smalllogo" <?php echo "src='".$Path."assets/images/smalllogo.svg'"?> alt="logo" width="50" height="50">
    </a>
    <a class="homebtn" <?php echo "href='".$Path."'"?> class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn"><a <?php echo "href='".$Path."pages/category1.php'" ?>>Introduction to Unix</a>
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a <?php echo "href='".$Path."pages/definition.php'" ?>>What is Unix?</a>
        <a <?php echo "href='".$Path."pages/howto.php'" ?>>How to Use</a>
        <a <?php echo "href='".$Path."pages/important.php'" ?>>Why is Unix Important?</a>
        </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn"><a <?php echo "href='".$Path."pages/category2.php'" ?>>Basics of Unix</a>
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a <?php echo "href='".$Path."pages/basic_commands.php'" ?>>Basic Unix Commands</a>
        <a <?php echo "href='".$Path."pages/commands.php'" ?>>Other Commands</a>
        <a <?php echo "href='".$Path."pages/navigation.php'" ?>>Navigation</a>
        </div>
    </div> 
    <div class="dropdown">
        <button class="dropbtn"><a <?php echo "href='".$Path."pages/category3.php'" ?>>Advanced Unix </a>
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a <?php echo "href='".$Path."pages/files.php'" ?>>SFTP</a>
        <a <?php echo "href='".$Path."pages/ssh.php'" ?>>SSH</a>
        <a <?php echo "href='".$Path."pages/permissions.php'" ?>>File Ownership and Permissions</a>
        </div>
    </div> 
        
      <a  href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    
