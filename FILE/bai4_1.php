<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="noi_dung_tho">
        <?php
            // $f = fopen('file/sang_thang_5.txt', 'r');
            // while (!feof($f)) {
            //     $row = fgets($f);
            //     echo $row . '</br>';
            // }
            echo str_replace(PHP_EOL, '</br>', file_get_contents('file/sang_thang_5.txt'));
        ?>
    </div>
</body>
</html>