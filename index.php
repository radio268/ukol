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

    <main>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
                In game name:
                <input type="string" name="in_game_name" id="in_game_name" required><br>

                Type of player:
                <select name="player_type" id="player_type">
                    <option value="play">player</option>
                    <option value="talk">talker</option>
                    <option value="build">builder</option>
                    <option value="mine">miner</option>
                    <option value="redstone">redstoner</option>
                    <option value="prefere not to say">prefer not to say</option>
                </select><br>

                Why should we whitelist you?:
                <input type="string" name="aditional_reason" id="additional_reason" required><br>

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
