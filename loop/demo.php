<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n = 10; // Bạn có thể thay đổi giá trị của n ở đây

        for ($i = 1; $i <= $n; $i++) {
            echo $i . " ";
        }
    ?>
    <br>
    
    <?php
        $n = 10; // Bạn có thể thay đổi giá trị của n ở đây
        $i = 1; // Khởi tạo biến đếm

        while ($i <= $n) {
            switch ($i) {
                default:
                    echo $i . " ";
                    break;
            }
            $i++; // Tăng biến đếm
        }
    ?>


</body>
</html>