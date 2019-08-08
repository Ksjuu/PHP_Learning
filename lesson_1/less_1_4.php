<?php
$today = getdate ();
$day= $today['weekday'];
$mon=$today['month'];
$years=$today['year'];
?>
<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $mon; ?></title>
</head>
<h3>Текущий день</h3> <h4> <?php echo $day; ?> </h4> </br>
<h3>Текущий год </h3> <h4> <?php echo $years; ?> </h4></br>
<body>

</body>
</html>