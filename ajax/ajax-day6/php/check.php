<?php
     // 校验用户提交的数据是否是我们需要的 假如用户输入along 给前台返回yes,
     //否则返回no
     // 获得用户提交的数据
     $userName = $_GET["userName"];
     if($userName == "along") {
         echo "yes";
     } else {
         echo "no";
     }

?>

