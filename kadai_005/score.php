<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
    list($score1, $score2, $score3, $score4, $score5, $score6, $score7, $score8, $score9, $score10) = $scores;
    $score_sum = $score1+ $score2+ $score3+ $score4+ $score5+ $score6+ $score7+ $score8+ $score9+ $score10;
    $score_avg = $score_sum / 10;
    echo $score_avg;
    ?>
</body>
</html>