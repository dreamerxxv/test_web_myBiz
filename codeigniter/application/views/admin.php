<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<div class="box">

    <div class="action">
        <h2>Daftar pesan</h2>
        <a href="<?= site_url('BukuTamu/export_csv') ?>" class="export-button">Export data CSV</a>

    </div>

    <?php foreach ($messages as $msg): ?>
        <div class="message">
            <p><?= nl2br(htmlspecialchars($msg->pesan)) ?></p>

            <hr>
            <div class="user-info">
                <?= htmlspecialchars($msg->nama) ?> - <?= htmlspecialchars($msg->email) ?>
                <div class="timestamp"><?= $msg->created_at ?></div>
            </div>
        </div>
    <?php endforeach; ?>

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

    .user-info {
        font-weight: bold;
        font-size: 13px;
        color: #555;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 5px;
    }

    .action {
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 20px;
        justify-content: space-between;
    }

    .export-button {
        padding: 10px;
        font-weight: 600;
        font-size: 12px;
        border: none;
        background-color: #5BD1A9;
        border-radius: 10px;
        color: black;
    }

    .message {
        background: #F8F8F8;
        border-radius: 15px;
        padding: 15px;
        margin-bottom: 20px;
    }
</style>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin - Daftar Pesan</title>
    
</head>

<body>

    <div class="header">

        <h2>Daftar Pesan Masuk</h2>
        <a href="<?= site_url('BukuTamu/export_csv') ?>" class="export-button">Export data CSV</a>

    </div>

    <?php foreach ($messages as $msg): ?>
        <div class="message">
            <p><?= nl2br(htmlspecialchars($msg->pesan)) ?></p>

            <hr>
            <div class="user-info">
                <?= htmlspecialchars($msg->nama) ?> - <?= htmlspecialchars($msg->email) ?>
                <div class="timestamp"><?= $msg->created_at ?></div>
            </div>
        </div>
    <?php endforeach; ?>

</body>

</html>

<style>
    .export-button {
        padding: 10px;
        font-weight: 600;
        font-size: 12px;
        border: none;
        background-color: #5BD1A9;
        border-radius: 10px;
        color: black;
    }

    .action {
        margin-bottom: 20px;
    }

    .user-info {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 5px;
    }

    .user-info {
            font-weight: bold;
            font-size: 13px;
            color: #555;
            margin-top: 10px;
        }

    .message {
            background: #F8F8F8;
            border-radius: 15px;
            padding: 15px;
            margin-bottom: 20px;
        }

    header {
        display: flex;
        justify-content: space-between;
    }
</style> -->