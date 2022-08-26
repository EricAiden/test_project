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
    <title>bai4</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Enter:
        <input type="text" name="a">
        <button type="submit">OK</button>
    </form>
    <?php
    $a = filter_input(INPUT_POST, 'a');
    if (!empty($a)) {
        switch ($a) {
            case 'x':
                echo "Mùa xuân ! <br/>";
                break;
            case 'h':
                echo "Mùa hạ !<br/>";
                break;
            case 't':
                echo "Mùa thu !<br/>";
                break;
            case 'd':
                echo "Mùa đông !<br/>";
                break;
            default:
                echo "Không có mùa này !";
        }
    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>