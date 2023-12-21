<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; $length_number = 24; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
        <?php
        for ($i = 1;$i<=$length_number;$i++){
            echo "<tr><td>" .$multi_x.'X'.$i. '='.($multi_x*$i)."<br><br>\n";
        }
        
?>
</body>

</html> 