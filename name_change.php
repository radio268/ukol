<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if ( isset( $_COOKIE['text'] ))
    {
        $text_in = $_COOKIE['text'];
    }
    else
    {
                
    }  
    
    
    $list1 = array();
    $list2 = array();

    if (isset($_POST['c01']))
    {
        array_push($list1, $_POST['a01']);
        array_push($list2, $_POST['b01']);
    }
    if (isset($_POST['c02']))
    {
        array_push($list1, $_POST['a02']);
        array_push($list2, $_POST['b02']);
    }
     if (isset($_POST['c03']))
    {
        array_push($list1, $_POST['a03']);
        array_push($list2, $_POST['b03']);
    }
     if (isset($_POST['c04']))
    {
        array_push($list1, $_POST['a04']);
        array_push($list2, $_POST['b04']);
    }
     if (isset($_POST['c05']))
    {
        array_push($list1, $_POST['a05']);
        array_push($list2, $_POST['b05']);
    }
     if (isset($_POST['c06']))
    {
        array_push($list1, $_POST['a06']);
        array_push($list2, $_POST['b06']);
    }
     if (isset($_POST['c07']))
    {
        array_push($list1, $_POST['a07']);
        array_push($list2, $_POST['b07']);
    }
     if (isset($_POST['c08']))
    {
        array_push($list1, $_POST['a08']);
        array_push($list2, $_POST['b08']);
    }
     if (isset($_POST['c09']))
    {
        array_push($list1, $_POST['a09']);
        array_push($list2, $_POST['b09']);
    }
     if (isset($_POST['c10']))
    {
        array_push($list1, $_POST['a10']);
        array_push($list2, $_POST['b10']);
    }
     if (isset($_POST['c11']))
    {
        array_push($list1, $_POST['a11']);
        array_push($list2, $_POST['b11']);
    }
     if (isset($_POST['c12']))
    {
        array_push($list1, $_POST['a12']);
        array_push($list2, $_POST['b12']);
    }
     if (isset($_POST['c13']))
    {
        array_push($list1, $_POST['a13']);
        array_push($list2, $_POST['b13']);
    }
     if (isset($_POST['c14']))
    {
        array_push($list1, $_POST['a14']);
        array_push($list2, $_POST['b14']);
    }
     if (isset($_POST['c15']))
    {
        array_push($list1, $_POST['a15']);
        array_push($list2, $_POST['b15']);
    }
     if (isset($_POST['c16']))
    {
        array_push($list1, $_POST['a16']);
        array_push($list2, $_POST['b16']);
    }

    echo $list1;
    echo $list2;

    foreach ($list1 as $item) {
        echo $item . "<br>";
    }

    foreach ($list2 as $item) {
        echo $item . "<br>";
    }
    
}
?>




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
            if ( isset( $_COOKIE['text'] ))
            {
                echo $_COOKIE['text'];
            }
            else
            {
                echo "______";
            }  
        ?>
    </header>

    


    <!-- main content  -------------------------------------------------------------------------------------------->
    <main>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
                <input type="string" name="text_in" id="text_in"><br>

                what do you want to do with it:<br>
                
                <input type="string" name="a01" id="a01"><input type="string" name="b01" id="b01"><input type="checkbox" name="c01" id="c01"><br>
                <input type="string" name="a02" id="a02"><input type="string" name="b02" id="b02"><input type="checkbox" name="c02" id="c02"><br>
                <input type="string" name="a03" id="a03"><input type="string" name="b03" id="b03"><input type="checkbox" name="c03" id="c03"><br>
                <input type="string" name="a04" id="a04"><input type="string" name="b04" id="b04"><input type="checkbox" name="c04" id="c04"><br>
                <input type="string" name="a05" id="a05"><input type="string" name="b05" id="b05"><input type="checkbox" name="c05" id="c05"><br>
                <input type="string" name="a06" id="a06"><input type="string" name="b06" id="b06"><input type="checkbox" name="c06" id="c06"><br>
                <input type="string" name="a07" id="a07"><input type="string" name="b07" id="b07"><input type="checkbox" name="c07" id="c07"><br>
                <input type="string" name="a08" id="a08"><input type="string" name="b08" id="b08"><input type="checkbox" name="c08" id="c08"><br>
                <input type="string" name="a09" id="a09"><input type="string" name="b09" id="b09"><input type="checkbox" name="c09" id="c09"><br>
                <input type="string" name="a10" id="a10"><input type="string" name="b10" id="b10"><input type="checkbox" name="c10" id="c10"><br>
                <input type="string" name="a11" id="a11"><input type="string" name="b11" id="b11"><input type="checkbox" name="c11" id="c11"><br>
                <input type="string" name="a12" id="a12"><input type="string" name="b12" id="b12"><input type="checkbox" name="c12" id="c12"><br>
                <input type="string" name="a13" id="a13"><input type="string" name="b13" id="b13"><input type="checkbox" name="c13" id="c13"><br>
                <input type="string" name="a14" id="a14"><input type="string" name="b14" id="b14"><input type="checkbox" name="c14" id="c14"><br>
                <input type="string" name="a15" id="a15"><input type="string" name="b15" id="b15"><input type="checkbox" name="c15" id="c15"><br>
                <input type="string" name="a16" id="a16"><input type="string" name="b16" id="b16"><input type="checkbox" name="c16" id="c16"><br>

                
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
