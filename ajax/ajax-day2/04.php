<?php
     $a = array("北京","上海","广州","深圳","合肥","杭州");
     //echo  $a[1];

     // 输出数组详细信息
     //print_r($a);

     // 求数组元素个数
     //echo count($a);
?>
<ul>
     <?php
          for($i=0; $i<count($a); $i++) {
              echo "<li>".$a[$i]."</li>";
          }
     ?>
</ul>
<ul>
    <?php
          for($i=0;$i<count($a);$i++){
    ?>
    <li><?php echo $a[$i]; ?></li>
    <?php } ?>
</ul>



