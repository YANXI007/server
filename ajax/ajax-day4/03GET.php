<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>GET请求</h2>
    <?php
       // 得到用户输入的姓名和年龄 localhost/ajax-day4/03.php?name=""&age=
       $name = $_GET["name"];
       $age = $_GET["age"];
       if($age>=18) {
           echo "恭喜你，你可以考取驾照";
       } else {
        echo "你年龄太小，不适合";
       }

   ?>
    <?php
        $class = $_GET["class"];
        $sex = $_GET["sex"];
    ?>
</body>
</html>