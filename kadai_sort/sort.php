<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sort_2way(&$array, $order) {
        if ($order) {
            echo "昇順にソートします。<br>";
            sort($array); 
        } else {
            echo "降順にソートします。<br>";
            rsort($array);
        }
    
        // ソート結果を表示
        foreach ($array as $num) {
            echo $num . '<br>';
        }
    }
    
    $nums = [15, 4, 18, 23, 10];
    
    echo "<p>";
    sort_2way($nums, TRUE);
    echo "</p><p>";
    sort_2way($nums, FALSE);
    echo "</p>";
    ?>
</body>
</html>