<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>bai3</title>
</head>

<body>
    <?php
    define("pi", 3.14);
    $r = 10;
    echo "<span style='color:red'>Tính chu vi và diện tích hình tròn:</span><br/>";
    echo "Bán kính hình tròn : " . $r . "<br/>";
    echo "Chu vi hình tròn : " . 2 * pi * $r . "<br/>";
    echo "Diện tích hình tròn : " . pi * pow($r, 2);
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>