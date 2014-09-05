<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Software University</title>
</head>


<body>
    <form method="GET">
            <textarea name="input" id="input">
            </textarea>
            <input type="text" name="word" id="word" value="is"></input>  
            <input type="submit" name="submit" value="Generate"/>
    </form>
<?php

if (isset($_GET['input']) && isset($_GET['word']))
{    
    $input = $_GET['input'];   
    $word = $_GET['word'];
    $sentences = preg_split("/([^.?!]+[.?!])\s*/", $input, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    $sentences = array_map('trim', $sentences);    
    var_dump($sentences);
      
    foreach ($sentences as $sentence) {        
        $pattern = "/\b$word\b.*[.?!]/";
        $count = preg_match($pattern, $sentence, $results);    
       
        if (preg_match($pattern, $sentence, $results) > 0) {
            echo $sentence;
            echo "<br/>";   
        }            
     }
}

?>
</body>

</html>
