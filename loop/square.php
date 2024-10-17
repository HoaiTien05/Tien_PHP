<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .square{
            width: 50px;
            height: 50px;
            background-color:red;
            margin:10px;
            display: inline-block;
        }
    </style>
    <?php
    $a=5;
    for($i=0;$i< $a; $i++){
        for($j=0;$j<5;$j++){
            echo"<div class='square'></div>";
        }  
    }
    ?>
</body>
</html>