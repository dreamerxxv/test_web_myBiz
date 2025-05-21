<?php
$error_nama = '';
$error_email = '';
$error_pesan = '';

$nama = '';
$email = '';
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    if (empty($nama)) $error_nama = "Nama tidak boleh kosong";
    if (empty($email)) $error_email = "Email tidak boleh kosong";
    if (empty($pesan)) $error_pesan = "Pesan tidak boleh kosong";

    if (empty($error_nama) && empty($error_email) && empty($error_pesan)) {
        
        $CI = &get_instance();
        $CI->load->model('Buku_tamu_model');
        $CI->Buku_tamu_model->save_message($nama, $email, $pesan);
        $nama = $email = $pesan = ''; 
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>

<div class="box">
    <div class="header">
        <h1>Buku Tamu</h1>
        <p>Isi nama dan email anda untuk mengirim pesan</p>
    </div>

    <form action="" method="post">

        <div class="error-user-info">
            <?php if ($error_nama): ?>
                <small style="color: red;"><?= $error_nama ?></small><br>
            <?php endif; ?>


            <?php if ($error_email): ?>
                <small style="color: red;"><?= $error_email ?></small><br>
            <?php endif; ?>
        </div>

        <div class="form-user-info">
            <input type="text" id="nama" name="nama" value="<?= $nama ?>" placeholder="Nama">

            <input type="email" id="email" name="email" value="<?= $email ?>" placeholder="Email">
        </div>

        <textarea name="pesan" id="pesan" rows="6" placeholder="Tuliskan pesan anda"><?= $pesan ?></textarea> <br>
        <?php if ($error_pesan): ?>
            <small style="color: red;"><?= $error_pesan ?></small><br>
        <?php endif; ?>

        <button type="submit" class="submit-button">Submit</button>
    </form>
</div>

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

    .header {
        text-align: center;
    }

    .header p {
        color: #ACACAC;
    }

    input {
        padding: 10px 5px 10px 5px;
        width: 46%;
        margin-top: 15px;
        border: 1px solid #BBBBBB;
        border-radius: 10px;
    }

    textarea {

        padding: 10px 5px 10px 5px;
        width: 97%;
        margin-top: 15px;
        border: 1px solid #BBBBBB;
        border-radius: 10px;
    }

    .submit-button {
        padding: 10px;
        width: 100%;
        font-weight: 600;
        margin-top: 15px;
        border: none;
        background-color: #5BD1A9;
        border-radius: 10px;
    }

    hr {
        margin-top: 2rem;
    }

    ul {
        display: flex;
        margin-top: 10px;
        justify-content: flex-end;
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    li {
        list-style: none;
        background: #F8F8F8;
        padding: 5px 15px 5px 15px;
        border-radius: 15px;
    }

    li p {
        font-size: 14px;
    }

    li hr {
        margin-top: 1rem;
        color: #BBBBBB;
    }

    .form-user-info {
        display: flex;
        gap: 10px;
    }

    .error-user-info {
        display: flex;
        justify-content: space-between;
    }

    .action {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }
</style>