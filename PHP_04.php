<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Ganjil</title>
</head>

<body>
    <div class="box">
        <h1>Form Output Bilangan Ganjil</h1>
        <form action="" method="post">

            <label for="num">Masukkan nilai (maksimal 10): </label> <br>
            <input type="number" id="num1" name="num1" min="1" required> -
            <input type="number" id="num2" name="num2" min="1" required>
            <button type="submit">Submit</button>
        </form>



        <?php

        function ganjil($angka1, $angka2)
        {
            $angka = [];

            if ($angka1 < $angka2) {
                $start = $angka1;
                $end = $angka2;
            } else {
                $start = $angka1;
                $end = $angka2;
            }


            echo "Bilangan ganjil dari $start sampai $end:<br>";

            while ($start <= $end) {
                if ($start % 2 != 0) { // Cek apakah ganjil
                    $angka[] = $start;
                }
                $start++; // lanjut ke angka berikutnya
            }

            return $angka;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka1 = $_POST["num1"];
            $angka2 = $_POST["num2"];

            $result = ganjil((int) $angka1, $angka2);
            echo json_encode($result);
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
        border: 1px solid #C48C23;
        background-color: #FFDEBB;
        border-radius: 5px;
    }
</style>