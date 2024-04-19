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

    </header>

    <!-- php scrypt  ---------------------------------------------------------------------------------------------->

    <!--  do not touch it will explode -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo 'test';
    }
    ?>


    <!-- main content  -------------------------------------------------------------------------------------------->
    <main>

    
    <!-- main form  ----------------------------------------------------------------------------------------------->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
                text to be edited:
                <input type="string" name="text_in" id="text_in" required><br>

                what do you want to do with it:
                <select name="selection_1" id="selection_1">
                    <option value="cname"> namechange    </option>
                    <option value="confg"> configuration </option>
                    <option value="style"> style         </option>
                </select><br>

                how long should the cookie last:
                <select name="selection_2" id="selection_2">
                    <option value="cname"> until website close       </option>
                    <option value="confg"> until search engine close </option>
                    <option value="confg"> until pc reboot           </option>
                    <option value="style"> until the end of time     </option>
                </select><br>

                <input type="submit" value="go"><br>
            </p>
        </form> 
        
        
        
    </main>

    <footer>
        <p>&copy; 2023 Pootis</p>
    </footer>

</body>

</html>





<!-- main content  -------------------------------------------------------------------------------------------->
