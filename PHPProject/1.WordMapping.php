<<<<<<< HEAD
<<<<<<< HEAD
sdfjahspdofjh
=======
"clone2 new cloen 2" 
>>>>>>> 6546a145d92d16308bc6e426762829356ac96430
=======
<!DOCTYPE html>
<html>
<head>
    <title>Word Mapper</title>
    <meta charset="UTF-8">
    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form method="post">
        <textarea name="text"></textarea><br>
        <input type="submit" value="Count words"/>
    </form>
    <?php
    if (isset ($_POST['text'])) :
    $words = preg_split('/\W+/', strtolower($_POST['text']), -1, PREG_SPLIT_NO_EMPTY);
    $wordMap = [];
    foreach ($words as $word) {
        if (isset($wordMap[$word])) {
            $wordMap[$word]++;
        } else {
            $wordMap[$word] = 1;
        }
    }
    arsort($wordMap);
    ?>
    <table>
        <?php foreach ($wordMap as $word => $count) : ?>
            <tr>
                <td><?=$word?></td>
                <td><?=$count?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php endif; ?>
</body>
</html>
>>>>>>> 8646d6fb7c6a1a73c602c4fac1a61027aa0a9fcd
