<?php
$error_nama = "";
$error_alamat = "";
$error_phone = "";
$error_gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    if (empty($nama)) {
        $error_nama = "Nama tidak boleh kosong";
    } elseif (!ctype_alpha($nama)) {
        $error_nama = "Nama hanya boleh berisi huruf";
    }

    if (empty($alamat)) {
        $error_alamat = "Alamat tidak boleh kosong";
    }

    if (empty($phone)) {
        $error_phone = "No. Telepon tidak boleh kosong";
    } elseif (!ctype_digit($phone)) {
        $error_phone = "No. Telepon hanya boleh berisi angka";
    }

    if (empty($gender)) {
        $error_gender = "Jenis Kelamin tidak boleh kosong";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <div class="box">
        <h1>Data Pengguna</h1>
        <form action="" method="post">
            <table>

                <tr>
                    <td><label for="nama">Nama: </label></td>
                    <td><input type="text" id="nama" name="nama" placeholder="John Doe"> <br>
                        <?php if ($error_nama): ?>
                            <small style="color: red;"><?= $error_nama ?></small><br>
                        <?php endif; ?>
                    </td>
                </tr>

                <tr>
                    <td><label for="alamat">Alamat: </label></td>
                    <td><input type="text" id="alamat" name="alamat" placeholder="Bogor, Indonesia"> <br>
                        <?php if ($error_alamat): ?>
                            <small style="color: red;"><?= $error_alamat ?></small><br>
                        <?php endif; ?>
                    </td>
                </tr>

                <tr>
                    <td><label for="phone">No. Telp: </label></td>
                    <td><input type="text" id="phone" name="phone" placeholder="08977382192"> <br>
                        <?php if ($error_phone): ?>
                            <small style="color: red;"><?= $error_phone ?></small><br>
                        <?php endif; ?>
                    </td>
                </tr>

                <tr>
                    <td><label for="gender">Jenis Kelamin: </label></td>
                    <td>
                        <select name="gender" id="gender">
                            <option selected></option>
                            <option value="laki-laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select> <br>
                        <?php if ($error_gender): ?>
                            <small style="color: red;"><?= $error_gender ?></small><br>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>

            <button type="submit">Submit</button>
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

    .box {
        padding: 35px;
        background: #f4f4f4;
        border-radius: 20px;
    }

    label {
        font-weight: 600;
        font-size: 18px;
    }

    input {
        padding: 10px 5px 10px 5px;
        margin: 5px 0px 5px 0px;
        border: none;
        border-radius: 5px;
    }

    ::placeholder {
        font-size: 12px;
        color: #DEDEDE;
    }

    select {
        padding: 10px 5px 10px 5px;
        margin: 5px 0px 5px 0px;
        border: none;
        border-radius: 5px;
    }

    button {
        padding: 10px;
        margin-top: 10px;
        font-weight: 600;
        font-size: 16px;
        width: 100%;
        border: none;
        border: 1px solid #23A8C4;
        background-color: #BBF6FF;
        border-radius: 5px;
    }
</style>
