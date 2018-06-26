<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
         table,tr,td {
             border: 1px solid red;
         }

         td {
             width: 100px;
             height: 20px;
         }

         .green {
             background-color: #0f0;
         }
    </style>
</head>
<body>
    <table>
        <?php  
             for($i=0; $i<20; $i++) {   
         ?>
        <tr <?php if($i%2==1) {echo "class='green'";} ?>>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>