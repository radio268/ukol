<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pootis-menu</title>

    <style>
        
    </style>
</head>

<body>
    <header>
        <p>name change</p>
        <li><a href="index.php">go back</a></li>
        
        <?php
            echo $_COOKIE['text'];    
        ?>

    </header>

    


    <!-- main content  -------------------------------------------------------------------------------------------->
    <main>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
                <input type="string" name="text_in" id="text_in"><br>

                what do you want to do with it:
                <textarea name="selection_1" id="selection_1" rows="4"></textarea>

                <input type="submit" value="go"><br>
            </p>
        </form> 


    
    <!-- main form  ----------------------------------------------------------------------------------------------->
        
        
        
        
    </main>

    <footer>
        <p>&copy; 2023 Pootis</p>
    </footer>

</body>

</html>
