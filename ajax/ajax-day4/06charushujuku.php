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
        $result  = mysql_query("INSERT INTO 
             student(xingming,xuehao,tel,age) VALUES('jack','10005','15673646',24)");
        if($result==1) {
            echo "插入成功";
        } else {
            echo "插入数据失败，请联系管理员";
        }
      
      //5.关闭连接
       mysql_close($connect);
    ?>


</body>
</html>