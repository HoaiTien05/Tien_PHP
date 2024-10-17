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
        $sum = 0; // Khởi tạo biến tổng

        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 != 0) { // Kiểm tra số lẻ
                $sum += $i; // Cộng số lẻ vào tổng 
                // cách2: $sum = $sum + $i;           
             }
        }
        echo "Tổng các số lẻ từ 1 đến $n là: $sum";

        ?>
        <br>
        
        <!-- // Sử dụng vòng lặp while --> 

        <?php
            $n = 10; // Bạn có thể thay đổi giá trị của n ở đây
            $sum = 0; // Khởi tạo biến tổng
            $i = 1; // Khởi tạo biến đếm

            while ($i <= $n) {
                if ($i % 2 == 0) { // Kiểm tra số lẻ
                    $sum += $i; // Cộng số chẳn vào tổng
                }
                $i++; // Tăng biến đếm
            }

            echo "Tổng các số chẳn từ 1 đến $n là: $sum";
        ?>


    </body>
</html>