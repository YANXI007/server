<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,td {
            border:1px solid red;
            border-collapse: collapse;
        }
        td {
            width:100px;
            height: 20px;
        }
        .odd {
            background-color:#eee;
        }
    </style>
</head>
<body>
    <table>
        <?php for($i=0; $i<10; $i++) {?>
       <tr <?php if($i%2==0)  {echo "class='odd'";} ?>>
           <td></td>
           <td></td>
           <td></td>
       </tr>
        <?php } ?>
    </table>

</body>
</html>