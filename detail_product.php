<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"&gt>
    <title>Detail Handphone</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="judul">Detail Handphone <?= $_GET["nama"]; ?></h1>
        </div>
        
        <div class="content">
            <table class="table1">
                <tr>
                    <td>Nama</td>
                    <td><?= $_GET["nama"]; ?></td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td><?= $_GET["ram"]; ?></td>
                </tr>
                <tr>
                    <td>Memori Internal</td>
                    <td><?= $_GET["memori"]; ?></td>
                </tr>
                <tr>
                    <td>Kamera</td>
                    <td><?= $_GET["kamera"]; ?></td>
                </tr>
                <tr>
                    <td>Baterai</td>
                    <td><?= $_GET["baterai"]; ?></td>
                </tr>
            </table>
            <a class="tombol-back" href="product.php">Kembali</a>
        </div>
        

        
    </div>
    
</body>
</html>