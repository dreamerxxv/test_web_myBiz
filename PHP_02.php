<?php
$name = '';
$password = '';
$error_nama = '';
$error_password = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['nama'];
    $password = $_POST['password'];

    if (empty($name)) {
        $error_nama = "Nama tidak boleh kosong";
    }

    if (empty($password)) {
        $error_password = "Password tidak boleh kosong";
    } else {

        $length = 0;
        while (isset($name[$length])) {
            $length++;
        }

        $reversedWord = '';
        $i = $length - 1;
        while ($i >= 0) {
            $reversedWord .= $name[$i];
            $i--;
        }

        if ($password === $reversedWord) {
            $success = "Selamat kamu berhasil Login!";
        } else {
            $error_password = "Password harus kebalikan dari nama!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="box">
        <div class="header">
            <h1>Login</h1>
            <p>Note: password harus kebalikan dari nama</p>
        </div>

        <?php if ($success): ?>
            <span style="color: green; text-align: center;"><?= $success ?></span><br>
        <?php endif; ?>
        <form action="" method="post">

            <input type="text" id="nama" name="nama" placeholder="John Doe"> <br>
            <?php if ($error_nama): ?>
                <small style="color: red;"><?= $error_nama ?></small><br>
            <?php endif; ?>

            <input type="password" id="password" name="password" placeholder="Password"> <br>
            <?php if ($error_password): ?>
                <small style="color: red;"><?= $error_password ?></small><br>
            <?php endif; ?>

            <button type="submit">Login</button>
        </form>

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

    .header {
        text-align: center;
    }

    p {
        color: #ACACAC;
    }

    .box {
        padding: 35px;
        width: 30%;
        border-radius: 20px;
        box-shadow: 0 2px 2px 0 rgba(18, 25, 39, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    input {
        padding: 10px 5px 10px 5px;
        width: 95%;
        margin-top: 15px;
        border: 1px solid #BBBBBB;
        border-radius: 10px;
    }

    button {
        padding: 10px;
        width: 100%;
        font-weight: 600;
        margin-top: 15px;
        border: none;
        border: 1px solid #C4C423;
        background-color: #FFFCBB;
        border-radius: 10px;
    }
</style>