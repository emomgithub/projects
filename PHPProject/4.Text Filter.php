<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Software University</title>
</head>


<body>
    <form method="GET">
            <textarea name="input" id="input">It is not Linux, it is GNU/Linux. 
                Linux is merely the kernel, while GNU adds the functionality. 
                Therefore we owe it to them by calling the OS GNU/Linux! 
            Sincerely, a Windows client
            </textarea>
            <input type="text" name="banlist" id="banlist" value="Linux, Windows"></input>  
            <input type="submit" name="submit" value="Generate"/>
    </form>
<?php

if (isset($_GET['input']) && isset($_GET['banlist']))
{    
    $input = $_GET['input'];    
    $banlist = $_GET['banlist'];  
    $banwords = explode(", ", $banlist); 
      
    foreach ($banwords as $banword) {
       
        $input=  preg_replace_callback(
        "/\b$banword\b/",         
        function ($matches) 
        {
            return str_repeat("*", strlen($matches[0]));
        },
        $input);
     }
        
    echo $input;
}

?>
</body>

</html>
