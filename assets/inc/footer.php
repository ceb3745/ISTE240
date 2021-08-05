    <div class="bottom">
    <br>
    <hr class="thick">
    <br>
<div class="circles">
    <a <?php echo "href='".$Left."'" ?>><img class="left" <?php echo "src='".$Path."assets/images/left.svg'" ?> alt="left"  width="50" height="50"></a>
    <p class="Btitle"><?php echo $Page;?></p>
    <a <?php echo "href='".$Right."'" ?>><img class="right" <?php echo "src='".$Path."assets/images/right.svg'" ?> alt="right"  width="50" height="50"></a>
</div>
    <br>
    <img class="Blogo" <?php echo "src='".$Path."assets/images/smalllogo.svg'" ?> alt="Blogo"  width="80" height="80">
    <h2>Related reading</h2>
        <?php
            if($Page == "What is UNIX?" || $Page == "How to use UNIX" || $Page == "Why is UNIX Important" || $Page == "Introduction to UNIX"){
                if($Page != "Introduction to UNIX"){
                    echo '<a href="'.$Path.'/pages/category1.php">Introduction to UNIX</a><hr>';
                }
                if($Page != "What is UNIX?"){
                    echo '<a href="'.$Path.'/pages/definition.php">What is UNIX?</a><hr>';
                }
                if($Page != "How to use UNIX"){
                    echo '<a href="'.$Path.'/pages/howto.php">How to use UNIX</a><hr>';
                }
                if($Page != "Why is UNIX Important"){
                    echo '<a href="'.$Path.'/pages/important.php">Why is UNIX Important</a><hr>';
                }
            }
            if($Page == "Basic Commands" || $Page == "Commands in UNIX" || $Page == "Navigation" || $Page == "Basics of UNIX"){
                if($Page != "Basics of UNIX"){
                    echo '<a href="'.$Path.'/pages/category2.php">Basics of UNIX</a><hr>';
                }
                if($Page != "Basic Commands"){
                    echo '<a href="'.$Path.'/pages/basic_commands.php">Basic Commands</a><hr>';
                }
                if($Page != "Commands in UNIX"){
                    echo '<a href="'.$Path.'/pages/commands.php">Commands in UNIX</a><hr>';
                }
                if($Page != "Navigation"){
                    echo '<a href="'.$Path.'/pages/navigation.php">Navigation</a><hr>';
                }
            }
            if($Page == "File Management (SFTP)" || $Page == "SSH" || $Page == "Permissions" || $Page == "Advanced UNIX"){
                if($Page != "Advanced UNIX"){
                    echo '<a href="'.$Path.'/pages/category3.php">Advanced UNIX</a><hr>';
                }
                if($Page != "File Management (SFTP)"){
                    echo '<a href="'.$Path.'/pages/files.php">File Management (SFTP)</a><hr>';
                }
                if($Page != "SSH"){
                    echo '<a href="'.$Path.'/pages/ssh.php">SSH</a><hr>';
                }
                if($Page != "Permissions"){
                    echo '<a href="'.$Path.'/pages/permissions.php">Permissions</a><hr>';
                }
            }
            if($Page == "Home"){
                echo '<a href="'.$Path.'/pages/category1.php">Introduction to UNIX</a><hr>';
                echo '<a href="'.$Path.'/pages/category2.php">Basics of UNIX</a><hr>';
                echo '<a href="'.$Path.'/pages/category3.php">Advanced UNIX</a><hr>';

            }
        ?>
    <br>
        

   </div> 
</body>
</html>
