<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" <?php echo "href='".$Path."assets/css/dynamicstyle.css'" ?>>
    <link rel="stylesheet" <?php echo "href='".$Style."'"?>>
    <script type="text/javascript" <?php echo "src='".$Path."assets/js/nav.js'" ?>></script>
    <title><?php echo $Page; ?></title>
</head>
<body>
    <div class="topnav" id="myTopnav">
    <a href="#home" class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Lesson 1 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
        <div class="dropdown">
        <button class="dropbtn">Lesson 2 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
        <div class="dropdown">
        <button class="dropbtn">Lesson 3 
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
        


    <a  href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
    <a <?php echo "href='".$Path."index.php'"?>>
        <img class="smalllogo" <?php echo "src='".$Path."assets/images/smalllogo.svg'"?> alt="logo" width="80" height="80">
    </a>
    
