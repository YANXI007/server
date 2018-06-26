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
      //求1~100之间所有的质数 i
      for($i=2; $i<=100; $i++) {
          $count = 0;
          for($j=1; $j<=$i; $j++) {
              if($i%$j==0) {
                  $count++;
              }
          }
          if($count==2) {
              echo "<h3>".$i."</h3>";
          }
      }

    ?>



</body>
</html>