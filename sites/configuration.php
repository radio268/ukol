<?php

function cleancode1($input) {
    $lines = preg_split("/\R/", $input);

    $modifiedLines = [];
    $previousLeadingSpaces = '';

    foreach ($lines as $line)
    {
        if (trim($line) === '{') {
            $modifiedLines[] = $previousLeadingSpaces . '{';
        }
        elseif (preg_match('/^(\s*)(.*?)\{$/', $line, $matches))
        {
            $previousLeadingSpaces = $matches[1];
            $modifiedLines[] = $matches[1] . $matches[2];
            $modifiedLines[] = $matches[1] . '{';
        }
        else
        {
            if (preg_match('/^(\s*)/', $line, $matches))
            {
                $previousLeadingSpaces = $matches[1];
            }
            $modifiedLines[] = $line;
        }
    }
    return implode("\n", $modifiedLines);
}


function cleancode2($input) 
{
    $formatted = preg_replace('/\s*=\s*/', ' = ', $input);
    $formatted = str_replace('= =', '==',  $formatted);
    $formatted = str_replace('=  =', '==', $formatted);
    $formatted = str_replace('= !', '=!',  $formatted);
    return $formatted;
}

function cleancode3($input) {
    $lines = preg_split("/\R/", $input);
    $modifiedLines = [];

    foreach ($lines as $line) {
        preg_match('/^\s*/', $line, $matches);
        $leadingSpaces = $matches[0];

        $nearestMultipleOf3 = round(strlen($leadingSpaces) / 3) * 3;
        $modifiedLine = str_repeat(' ', $nearestMultipleOf3) . ltrim($line);

        $modifiedLines[] = $modifiedLine;
    }
    return implode("\n", $modifiedLines);
}

function cleancode4($input, $preserveChars = []) {
    $lines = explode("\n", $input);
    $modifiedLines = [];

    foreach ($lines as $line) {
        // Check if the line contains any of the preserve characters
        $preserve = false;
        foreach ($preserveChars as $char) {
            if (strpos($line, $char) !== false) {
                $preserve = true;
                break;
            }
        }

        // Split the line by '//'
        $parts = explode('//', $line, 2);
        
        // Keep only the part before the comment if preservation condition is not met
        if (!$preserve && isset($parts[1])) {
            $line = $parts[0];
        }

        // Add the line to the modified lines array
        $modifiedLines[] = $line;
    }

    return implode("\n", $modifiedLines);
}


if (isset($_COOKIE['text'])) {$text_in = base64_decode($_COOKIE['text']);}
else{ setcookie('text', "error empty", 0, "/");$text_in = "error empty";}

if (!(isset($_COOKIE['age']))){ setcookie('age', 0, 0, "/");}



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $text_out = $text_in;

    if (isset($_POST['a01']))
    {// { cleaning
        $text_out = cleancode1($text_in);
    }
    if (isset($_POST['a02']))
    {// = cleaning
        $text_out = cleancode2($text_in);
    }
    if (isset($_POST['a03']))
    {// space count clean
        $text_out = cleancode3($text_in);
    }
    if (isset($_POST['a04']))
    {// remove coments
        $text_out = cleancode4($text_in,['▸','▄','█','▀','░','#']);
    }
    
    if ($text_out != $text_in)
    {
        $cookie_age = isset($_COOKIE['age']) ? $_COOKIE['age'] : 0;
        setcookie('text', base64_encode($text_out), $cookie_age, "/");
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pootis-configuration</title>
    <script src="../javascrypt/showcookie.js" defer></script>
    <link rel="stylesheet" href="../styles/defalutstyles.css">
    <style>
        .left-section
        {
            width: 300px;
            background-color: #c4c2c2;
            text-align: left;
        }
        .right-section
        {
            flex: 1; 
            background-color: #b0b0b0;
            text-align: left;
        }
    </style>
</head>

<body>
    <header>
        <p class="logos">CONFIGURATION</p>
    </header>

    <main>
        <div class="container">
            <div class="left-section">
                <li><a href="../sites/menu.php">INDEX</a> <a href="../sites/name_change.php">NAME CHANGE</a> <a href="../sites/configuration.php">CONFIGURATION</a></li>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label>{ clean </label> <input type="checkbox" name="a01" id="a01"><br>
                    <label>= count </label> <input type="checkbox" name="a02" id="a02"><br>
                    <label>3 spaces</label> <input type="checkbox" name="a03" id="a03"><br>
                    <label>coments </label> <input type="checkbox" name="a04" id="a04"><br>
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


