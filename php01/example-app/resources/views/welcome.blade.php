<!doctype html>
<html>

<head>
    <title>Javascript 101</title>
    <style>
        body {
            background-color: #f0f0f0; /* Light gray background */
            font-family: Arial, sans-serif; /* Use Arial font */
        }

        h1 {
            color: #333; /* Dark gray text color */
        }

        #my_number {
            padding: 5px; /* Add some padding to the input field */
            margin-bottom: 10px; /* Add space below the input field */
        }

        button {
            padding: 8px 16px; /* Add padding to the button */
            background-color: #4CAF50; /* Green background */
            color: white; /* White text color */
            border: none; /* Remove border */
            cursor: pointer; /* Add cursor pointer on hover */
        }

        button:hover {
            background-color: #45a049; /* Darker green background on hover */
        }

        table {
            border-collapse: collapse; /* Collapse table borders */
            width: 100%; /* Take up full width */
            margin-top: 20px; /* Add space above the table */
        }

        th, td {
            border: 1px solid #ddd; /* Add borders to table cells */
            padding: 8px; /* Add padding to table cells */
            text-align: left; /* Align text to the left */
        }

        th {
            background-color: #f2f2f2; /* Light gray background for table header */
        }
    </style>
</head>

<body>
    <h1>แม่สูตรคูณ</h1>

    <input type="text" id="my_number" value="10">
    <button onclick="myFunction2()">submit number</button>
    <br><br>
    <table id="my_table">
        <thead>
            <tr>
                <th>สูตรคูณ</th>
                <th>คำตอบ</th>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("Javascript 101")
            $('#my_number').val(100)

        });

        function myFunction2() {
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            for (let i = 1; i <= 24; i++) {
                my_code_tr += "<tr><td>" + my_number + " x " + i + "</td><td>" + my_number * i + "</td></tr>";
            }
            $('#my_tbody').html(my_code_tr);

        }



    </script>

</body>

</html>
