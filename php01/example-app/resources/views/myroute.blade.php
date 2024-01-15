<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </head>

    <center>
<body>
    <h1><?php $myinput; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $myinput ?></h1>
        <div class="scrollable">
            <table>
                <tbody>
                    <?php
                    for ($i = 1; $i <= 24; $i++) {
                    ?>
                        <tr>
                            <td><?php echo $myinput ?></td>
                            <td>x</td>
                            <td><?php echo $i ?></td>
                            <td>=</td>
                            <td><?php echo $myinput * $i ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
         </h1>
</body>
</center>
</html>
