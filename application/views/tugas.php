<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        * {
            background-color: #87ceea;
        }
    </style>
</head>

<body style="font-family: 'PT Sans', sans-serif; margin: 0;">
    <table width="100%">
        <tr>
            <td style="font-size: 18px; font-weight: 700; line-height: 23px;" colspan="2" align="center">Provinsi Jawa Timur <br> Kota Malang</td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td style="vertical-align: top; font-size: 14px; font-weight: 400; line-height: 20px;" width="99" align="left">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $nama; ?> <br>Tempat/Tgl Lahir : <?= $tempatLahir; ?>, <?= $tanggalLahir; ?> <br>Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?= $alamat; ?></td>
            <td width="1" align="right"><img src="<?php echo $logo; ?>" width="100px"></td>
        </tr>
    </table>
</body>

</html>