<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-image: url('bgbgbg.jpg'); 
            background-size: 100%; 
            background-repeat: no-repeat; 
        }
        .scrollable {
            width: 150px;
            height: 300px;
            overflow-y: scroll;
            scrollbar-arrow-color: blue;
            scrollbar-face-color: #e7e7e7;
            scrollbar-3dlight-color: #a0a0a0;
            scrollbar-darkshadow-color: #888888;
            background-color: white;
        }
    </style>
    
    
</head>
<center>
<body>
    <br><br><br>
    
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div class="scrollable">
        <table>
            <tbody>
                <?php
                for ($i = 1; $i <= 24; $i++) {
                ?>
                    <tr>
                        <td><?php echo $multi_x ?></td>
                        <td>x</td>
                        <td><?php echo $i ?></td>
                        <td>=</td>
                        <td><?php echo $multi_x * $i ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</center>
</html>
