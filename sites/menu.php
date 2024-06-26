<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$text_in = nl2br($_POST['text_in']);
    $text_in = $_POST['text_in']; 
    $selection1 = $_POST['selection_1'];
    $age = $_POST['selection_2'];
    $cookie_age;

    if ($age == "0") {$cookie_age = 0;}
    elseif ($age == "1") {$cookie_age = time() + ( 1 * 24 * 3600);}
    elseif ($age == "2") {$cookie_age = time() + ( 2 * 24 * 3600);}
    elseif ($age == "3") {$cookie_age = time() + ( 7 * 24 * 3600);}
    elseif ($age == "4") {$cookie_age = time() + (14 * 24 * 3600);}
    else                 {$cookie_age = 0                        ;}

    setcookie('text', base64_encode($text_in), $cookie_age, "/");
    setcookie('age', $cookie_age, $cookie_age, "/");

    if     ($selection1 == "cname") {header("Location: name_change.php"  );}
    elseif ($selection1 == "confg") {header("Location: configuration.php");}

    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pootis-menu</title>
    <script src="../javascrypt/showcookie.js" defer></script>
    <link rel="stylesheet" href="../styles/defalutstyles.css">
    <style>
        .left-section
        {
            width: 500px;
            background-color: #c4c2c2;
            text-align: left;
        }
        .right-section
        {
            flex: 1; 
            background-color: #e0e0e0;
            text-align: left;
        }
    </style>
</head>

<body>
    <header>
        <p class="logos">MENU</p>
    </header>

    <main>
        <div class="container">
            <div class="left-section">
                <li><a href="../sites/menu.php">INDEX</a> <a href="../sites/name_change.php">NAME CHANGE</a> <a href="../sites/configuration.php">CONFIGURATION</a></li>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <label>text to be edited:</label> <br>
                    <textarea name="text_in" id="text_in" rows="4" cols="50" style="white-space: pre-wrap;"></textarea><br>

                    <label>what do you want to do with it:</label> <br>
                    <select name="selection_1" id="selection_1">
                        <option value="cname"> namechange    </option>
                        <option value="confg"> configuration </option>
                    </select><br>

                    <label>how long should the cookie last:</label> <br>
                    <select name="selection_2" id="selection_2">
                        <option value="0">until search engine close </option>
                        <option value="1">  1 x day                 </option>
                        <option value="2">  2 x day                 </option>
                        <option value="3">  7 x day                 </option>
                        <option value="4"> 14 x day                 </option>
                    </select><br>

                    <input type="submit" value="go"><br>
                    
                </form>
            </div>

            <div class="right-section">
                <p id="cookieText" class="preserve-whitespace">!</p>
            </div>
        </div>
    </main>

    <footer>
        <a href="../sites/help.html">HELP</a> <a href="../sites/lines.html">SPECIALLINES</a> <a href="../sites/other.html">HIDEOUT</a>
        <p id="year-paragraph"></p>
        <script src="../javascrypt/fotter.js"></script>
    </footer>

</body>

</html>