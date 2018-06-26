<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // 连接数据库
        //1.建立连接
        $connect=mysql_connect('localhost','root','123456');
        // 2 选择链接的数据库
        mysql_select_db("ajaxshujuku",$connect);
        // 3 更改数据操作字符集
        mysql_query("SET NAMES UTF8 ");
        
        // 4 执行SQL语句
            $result  = mysql_query("SELECT * FROM student");

        // 5 循环读取

        /*while($row = mysql_fetch_array($result)) {
            echo $row['xingming'];
            echo $row['xuehao'];
            echo $row["tel"];
            echo $row["age"];
            echo "<br/>";
        } */

        while($row = mysql_fetch_array($result)) { ?>
            <li><?php echo $row["class"];?></li>
        <?php }
    //6.关闭连接
       mysql_close($connect);
     ?>

    <?php
        $connect = mysql_connect('localhost','root','123456');
        mysql_select_db("ajaxshujuku",$connect);
        mysql_query("SET NAMES UTF8");
        $result = mysql_query("SELECT * FROM student");

        while($row = mysql_fetch_array($result)){ ?>
            <li><?php echo $row["class"]; ?></li>
        <?php }
        mysql_close($connect);

    ?>

</body>
</html>