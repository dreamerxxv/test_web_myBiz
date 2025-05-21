<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriks</title>
</head>

<body>
    <div class="box">
        <h1>Form Matrix n x n</h1>
        <form action="" method="post">

            <label for="num">Masukkan nilai (maksimal 10): </label> <br>
            <input type="number" id="num" name="num" min="1" required>
            <button type="submit">Submit</button>
        </form>



        <?php
        
        function matriks($value)
        {
            if ($value > 10) {
                echo "<p style='color:red;'>Input maksimal adalah 10.</p>";
                return;
            }

            echo "<h3>Matriks $value x $value:</h3>";
            echo "<pre>";

            for ($i = 0; $i < $value; $i++) {
                echo "\t";
                for ($row = 0; $row < $value; $row++) {
                    echo ($row + 1) . "\t";
                }

                echo "\n";
            }

            echo "</pre>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $input = $_POST["num"];

            if (is_numeric($input) && $input > 0) {
                matriks((int) $input);
            } else {
                echo "<p style='color:red;'>Masukkan angka valid antara 1 sampai 10.</p>";
            }
        }
        ?>

    </div>
</body>

</html>

<style>
    body {
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .box {
        padding: 25px;
        border-radius: 20px;
        box-shadow: 0 4px 8px 0 rgba(18, 25, 39, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    input {
        padding: 10px 5px 10px 5px;
        margin: 5px 0px 5px 0px;
        border: 1px solid #BBBBBB;
        border-radius: 5px;
    }

    button {
        padding: 10px;
        border: 1px solid #2370C4;
        background-color: #BBDCFF;
        border-radius: 5px;
    }
</style>