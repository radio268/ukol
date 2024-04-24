<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if ( isset( $_COOKIE['text'] )){
        $text_in = $_COOKIE['text'];
    }
    else{
        setcookie( 'text' , "" , 0 , "/" );
        $text_in = $_COOKIE['text'];
    }  
    
    $list1 = array();
    $list2 = array();

    if (isset($_POST['c01'])){
        isset($_POST['a01']) ? array_push($list1, $_POST['a01']) : array_push($list1, ' ');
        isset($_POST['b01']) ? array_push($list2, $_POST['b01']) : array_push($list1, ' ');}
    if (isset($_POST['c02'])){
        isset($_POST['a02']) ? array_push($list1, $_POST['a02']) : array_push($list1, ' ');
        isset($_POST['b02']) ? array_push($list2, $_POST['b02']) : array_push($list1, ' ');}
     if (isset($_POST['c03'])){
        isset($_POST['a03']) ? array_push($list1, $_POST['a03']) : array_push($list1, ' ');
        isset($_POST['b03']) ? array_push($list2, $_POST['b03']) : array_push($list1, ' ');}
     if (isset($_POST['c04'])){
        isset($_POST['a04']) ? array_push($list1, $_POST['a04']) : array_push($list1, ' ');
        isset($_POST['b04']) ? array_push($list2, $_POST['b04']) : array_push($list1, ' ');}
     if (isset($_POST['c05'])){
        isset($_POST['a05']) ? array_push($list1, $_POST['a05']) : array_push($list1, ' ');
        isset($_POST['b05']) ? array_push($list2, $_POST['b05']) : array_push($list1, ' ');}
     if (isset($_POST['c06'])){
        isset($_POST['a06']) ? array_push($list1, $_POST['a06']) : array_push($list1, ' ');
        isset($_POST['b06']) ? array_push($list2, $_POST['b06']) : array_push($list1, ' ');}
     if (isset($_POST['c07'])){
        isset($_POST['a07']) ? array_push($list1, $_POST['a07']) : array_push($list1, ' ');
        isset($_POST['b07']) ? array_push($list2, $_POST['b07']) : array_push($list1, ' ');}
     if (isset($_POST['c08'])){
        isset($_POST['a08']) ? array_push($list1, $_POST['a08']) : array_push($list1, ' ');
        isset($_POST['b08']) ? array_push($list2, $_POST['b08']) : array_push($list1, ' ');}
     if (isset($_POST['c09'])){
        isset($_POST['a09']) ? array_push($list1, $_POST['a09']) : array_push($list1, ' ');
        isset($_POST['b09']) ? array_push($list2, $_POST['b09']) : array_push($list1, ' ');}
     if (isset($_POST['c10'])){
        isset($_POST['a10']) ? array_push($list1, $_POST['a10']) : array_push($list1, ' ');
        isset($_POST['b10']) ? array_push($list2, $_POST['b10']) : array_push($list1, ' ');}
     if (isset($_POST['c11'])){
        isset($_POST['a11']) ? array_push($list1, $_POST['a11']) : array_push($list1, ' ');
        isset($_POST['b11']) ? array_push($list2, $_POST['b11']) : array_push($list1, ' ');}
     if (isset($_POST['c12'])){
        isset($_POST['a12']) ? array_push($list1, $_POST['a12']) : array_push($list1, ' ');
        isset($_POST['b12']) ? array_push($list2, $_POST['b12']) : array_push($list1, ' ');}
     if (isset($_POST['c13'])){
        isset($_POST['a13']) ? array_push($list1, $_POST['a13']) : array_push($list1, ' ');
        isset($_POST['b13']) ? array_push($list2, $_POST['b13']) : array_push($list1, ' ');}
     if (isset($_POST['c14'])){
        isset($_POST['a14']) ? array_push($list1, $_POST['a14']) : array_push($list1, ' ');
        isset($_POST['b14']) ? array_push($list2, $_POST['b14']) : array_push($list1, ' ');}
     if (isset($_POST['c15'])){
        isset($_POST['a15']) ? array_push($list1, $_POST['a15']) : array_push($list1, ' ');
        isset($_POST['b15']) ? array_push($list2, $_POST['b15']) : array_push($list1, ' ');}
     if (isset($_POST['c16'])){
        isset($_POST['a16']) ? array_push($list1, $_POST['a16']) : array_push($list1, ' ');
        isset($_POST['b16']) ? array_push($list2, $_POST['b16']) : array_push($list1, ' ');}

    $text_out = $text_in;
    
    if (isset($_POST['type'])){
        $searchPattern = '/\b(' . implode('|', array_map('preg_quote', $list1)) . ')\b/';
        $text_out = preg_replace($searchPattern, $list2, $text_in);
    }
    else{
        $text_out = str_replace($list1, $list2, $text_out);
    }

    echo $text_out;
    $age = $_COOKIE['age'];
    
    setcookie( 'text' , $text_out  , $age , "/" );
}?>


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
            
                <input type="checkbox" name="type" id="type"><br>
            
                <input type="text" name="a01" id="a01"><input type="text" name="b01" id="b01"><input type="checkbox" name="c01" id="c01"><br>
                <input type="text" name="a02" id="a02"><input type="text" name="b02" id="b02"><input type="checkbox" name="c02" id="c02"><br>
                <input type="text" name="a03" id="a03"><input type="text" name="b03" id="b03"><input type="checkbox" name="c03" id="c03"><br>
                <input type="text" name="a04" id="a04"><input type="text" name="b04" id="b04"><input type="checkbox" name="c04" id="c04"><br>
                <input type="text" name="a05" id="a05"><input type="text" name="b05" id="b05"><input type="checkbox" name="c05" id="c05"><br>
                <input type="text" name="a06" id="a06"><input type="text" name="b06" id="b06"><input type="checkbox" name="c06" id="c06"><br>
                <input type="text" name="a07" id="a07"><input type="text" name="b07" id="b07"><input type="checkbox" name="c07" id="c07"><br>
                <input type="text" name="a08" id="a08"><input type="text" name="b08" id="b08"><input type="checkbox" name="c08" id="c08"><br>
                <input type="text" name="a09" id="a09"><input type="text" name="b09" id="b09"><input type="checkbox" name="c09" id="c09"><br>
                <input type="text" name="a10" id="a10"><input type="text" name="b10" id="b10"><input type="checkbox" name="c10" id="c10"><br>
                <input type="text" name="a11" id="a11"><input type="text" name="b11" id="b11"><input type="checkbox" name="c11" id="c11"><br>
                <input type="text" name="a12" id="a12"><input type="text" name="b12" id="b12"><input type="checkbox" name="c12" id="c12"><br>
                <input type="text" name="a13" id="a13"><input type="text" name="b13" id="b13"><input type="checkbox" name="c13" id="c13"><br>
                <input type="text" name="a14" id="a14"><input type="text" name="b14" id="b14"><input type="checkbox" name="c14" id="c14"><br>
                <input type="text" name="a15" id="a15"><input type="text" name="b15" id="b15"><input type="checkbox" name="c15" id="c15"><br>
                <input type="text" name="a16" id="a16"><input type="text" name="b16" id="b16"><input type="checkbox" name="c16" id="c16"><br>

                <input type="submit" value="go"><br>
        </form>

        
    </main>
    <footer>
        <p>&copy; 2023 Pootis</p>
    </footer>
</body>
</html>
