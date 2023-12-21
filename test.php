<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <?php
    $multi_x = 2;
    $length_number = 12; // Reduced the length for better visibility
    ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
        <tr>
            <th>ตัวคูณ</th>
            <th>ผลลัพธ์</th>
        </tr>
        <?php
        for ($i = 1; $i <= $length_number; $i++) {
            echo "<tr><td>" . $multi_x . ' x ' . $i . '</td><td>' . ($multi_x * $i) . "</td></tr>\n";
        }
        ?>
    </table>
</body>

</html>
