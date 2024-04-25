<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <table>
        <tr>
            <th colspan="3">Tampil Data Mata Kuliah</th>
        </tr>
        <tr>
            <td colspan="3"><hr></td>
        </tr>
        <tr>
            <th>Kode MTK</th>
            <th>:</th>
            <td><?= $kode; ?></td>
        </tr>
        <tr>
            <th>Nama MTK</th>
            <th>:</th>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <td>SKS</td>
            <td>:</td>
            <td><?= $sks; ?></td>
        </tr>
        <tr>
            <td>
                <a href="<?= base_url("matakuliah"); ?>">Kembali</a>
            </td>
        </tr>
    </table>
</body>
</html>