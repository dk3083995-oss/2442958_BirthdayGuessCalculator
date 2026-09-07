```php
<!DOCTYPE html>
<html>
<head>

    <title>Birthday Guess Calculator</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f3e8ff;
            text-align: center;
            padding-top: 50px;
        }

        .container {
            width: 400px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px gray;
        }

        h1 {
            color: #7b2cbf;
        }

        label {
            display: block;
            text-align: left;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            background-color: #7b2cbf;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5a189a;
        }

        .result {
            margin-top: 25px;
            padding: 20px;
            background-color: #f8edff;
            border-radius: 10px;
        }

        .result h2 {
            color: #7b2cbf;
        }

        .result h3 {
            color: #e63946;
        }

    </style>

</head>

<body>

<div class="container">

    <h1>🎂 Birthday Guess Calculator</h1>

    <form method="post">

        <label>Enter Your Name:</label>

        <input type="text" name="name" required>


        <label>Enter Your Birthday:</label>

        <input type="date" name="birthday" required>


        <input type="submit" name="calculate" value="Guess Birthday">

    </form>


    <?php

    if (isset($_POST['calculate'])) {

        $name = $_POST['name'];
        $birthday = $_POST['birthday'];

        $date = new DateTime($birthday);

        $day = $date->format("l");
        $month = $date->format("F");
        $dateNumber = $date->format("d");

        echo "<div class='result'>";

        echo "<h2>Birthday Result</h2>";

        echo "Name: $name <br><br>";

        echo "Your Birthday: $dateNumber $month <br><br>";

        echo "Birthday Day: $day <br>";

        echo "<h3>🎉 Happy Birthday, $name!</h3>";

        echo "</div>";
    }

    ?>

</div>

</body>
</html>

