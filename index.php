<html>
    <head>

    </head>
<?php
session_start();
 if(!isset($_SESSION['todoCollection']))
    $_SESSION['todoCollection'] = [];

    

    $cookie_name = "lol";
    $cookie_value = "God";
    setcookie($cookie_name, $cookie_value, time() + (3600), "/");

    
    
   ?>



<body>
    <form action="/" method="POST">
        <div>enter item to todo: <input type="text" name="item" ></div>
        <div><input type="submit" value="Submit" /></div>
    </form>

    <ul>
        <?php 
        
        for($i = 0; $i < sizeof($_SESSION['todoCollection']); $i++) 
        { 
            echo "<li> ";
            echo $_SESSION['todoCollection'][$i]['caption'];
            echo "<input type='button' value='Remove' onclick=' location.href = `/remove.php?index=".$i."`'>";
            echo "</li>";
        }
        ?>
    </ul>
</body>

</html>