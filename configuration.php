<?php

function cleancode1($input) {
    // Split the input text into lines
    $lines = preg_split("/\R/", $input);

    // Initialize an array to hold the modified lines
    $modifiedLines = [];

    // Loop through each line
    foreach ($lines as $line) {
        // Check if the line consists only of '{'
        if (trim($line) === '{') {
            // If so, add a new line with the same leading spaces or tabs followed by '{'
            $modifiedLines[] = $line;
        } elseif (preg_match('/^(.*?)(\s*)\{$/', $line, $matches)) {
            // $matches[1] contains the part of the line before '{'
            // $matches[2] contains the leading spaces or tabs before '{'

            // Remove the '{' and append the line without it
            $modifiedLines[] = $matches[1];

            // Add a new line with the same leading spaces or tabs followed by '{'
            $modifiedLines[] = $matches[2] . '{';
        } else {
            // If the line doesn't end with a '{', add it as is
            $modifiedLines[] = $line;
        }
    }

    // Join the modified lines back into a single string
    return implode("\n", $modifiedLines);
}


if (isset($_COOKIE['text']))
{
    $text_in = base64_decode($_COOKIE['text']);
}
else
{
    setcookie('text', "error empty", 0, "/");
    $text_in = "error empty";
}
if (!(isset($_COOKIE['age'])))
{
    setcookie('age', 0, 0, "/");
}



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $text_out = $text_in;

    if (isset($_POST['a01']))
    {
        $text_out = cleancode1($text_in);
    }
    if (isset($_POST['a02']))
    {

    }
    if (isset($_POST['a03']))
    {

    }
    if (isset($_POST['a04']))
    {

    }
    if (isset($_POST['a05']))
    {

    }

    
    if ($text_out != $text_in)
    {
        $cookie_age = isset($_COOKIE['age']) ? $_COOKIE['age'] : 0;
        setcookie('text', base64_encode($text_out), $cookie_age, "/");
    }

}?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pootis-configuration</title>

    <style>
    </style>

</head>
<body>
    <header>
        <p>configuration</p>
        <li><a href="index.php">go back</a></li>
    </header>
    <main>

        <p id="cookieText">!</p>

        <script>
            let previousText = "";

            function getCookie(name) {
                let nameEQ = name + "=";
                let ca = document.cookie.split(';');
                for (let i = 0; i < ca.length; i++) {
                    let c = ca[i];
                    while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
                }
                return null;
            }

            function updateCookieText()
            {
                let encodedText = getCookie('text');
                let textElement = document.getElementById('cookieText');
                let text = encodedText !== null ? atob(decodeURIComponent(encodedText)) : "______";
                text = text.replace(/\n/g, '<br>');
                if (text !== previousText)
                {
                    textElement.innerHTML = text;
                    previousText = text;
                }
            }
            setInterval(updateCookieText, 500);
        </script>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>
            <input type="checkbox" name="a01" id="a01"><br>
            <input type="checkbox" name="a02" id="a02"><br>
            <input type="checkbox" name="a03" id="a03"><br>
            <input type="checkbox" name="a04" id="a04"><br>
            <input type="checkbox" name="a05" id="a05"><br>
        </p>
            <input type="submit" value="go"><br>
        </form>

    

        
        
        
        
    </main>

    <footer>
        <p>&copy; 2023 Pootis</p>
    </footer>

</body>

</html>


