<?php helper("form"); ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Input Mata Kuliah</title>
        <style>
            table {
                margin: 50px auto;
            }
            button{
                width: 100px;
                padding: 15px;
            }
            </style>
</head>
<body>
    <?php echo form_open("matakuliah/cetak"); ?>
    <table>
        <tr>
            <th colspan="3">
                Form Input Data Mata Kuliah
            </th>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <th>Kode MTK</th>
            <th>:</th>
            <td>
                <input type="text" name="kode" id="kode">
            </td>
        </tr>
        <tr>
            <th>Nama MTK</th>
            <th>:</th>
            <td>
                <input type="text" name="nama" id="kode">
            </td>
        </tr>
        <tr>
            <th>SKS</th>
            <td>:</td>
            <td>
                <select name="sks" id="sks">
                    <option value="" default>Pilih SKS</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <button type="submit" value="Submit">Submit</button>
            </td>
        </tr>
    </table>
    <?php form_close();?>
</body>
</html> 