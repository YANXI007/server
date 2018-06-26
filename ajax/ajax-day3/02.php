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
      /*
       for($i=0; $i<100; $i++) {
           if($i%5==0) {
               echo "<input type='radio' /><br/>";
           } else {
               echo "<input type='text' /><br/>";
           }
       } */

       for($i=0; $i<10; $i++) {
     ?>
     <input type="<?php if($i%5==0) {echo 'radio'; } else {echo 'text';}?>" />
     <br/>
       <?php } ?>

    <?php for($i=0;$i<10;$i++){ ?>
        <input type="<?php if($i%3){echo 'radio';}else{echo 'checkbox';} ?>">
        <br>
    <?php } ?>
</body>
</html>