<html>
<head>
    <title>Title</title>
</head>
<body>
<?php $title = "Admin";
    $numberList = [167, 268, 77];
    $map = [
        'city' => 'Bandung',
        'age' => 400,
    ];
?>

<h1><?php echo $title; ?></h1>
<h2><?php echo $numberList[2]; ?></h2>
<h3><?php echo $map['age']; ?></h3>

<?php
    var_dump($map);
?>
</body>
</html>