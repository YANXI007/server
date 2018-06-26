<?php
      $a = 10;
      $A = 20;
      $b = "hello world";
      $c = true;
      echo $a."<br />";
      echo $A."<br />";
      echo $b."<br />";
      echo $c."<br />";
?>

<?php

    $num = 100;
    function fn() {
        // 在函数内部假如需要认识全局变量  需要在函数内部声明global
        global $num;
        echo $num;
    }

    fn();

?>