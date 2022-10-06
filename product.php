<?php

$handphone = [
    [
        "nama" => "Samsung Galaxy A23 5G",
        "gambar" => "samsunga23.jpeg",
        "ram" => "6GB",
        "memori" => "128GB",
        "kamera" => "50 megapixel",
        "baterai" => "5000mAh"
    ],
    [
        "nama" => "Samsung Galaxy A04s",
        "gambar" => "samsunga04s.jpg",
        "ram" => "4GB",
        "memori" => "64GB",
        "kamera" => "50 megapixel",
        "baterai" => "5000mAh"
    ],
    [
        "nama" => "Samsung Galaxy A73 5G",
        "gambar" => "samsunga73.jpg",
        "ram" => "8GB",
        "memori" => "256GB",
        "kamera" => "108 megapixel",
        "baterai" => "5000mAh"
    ],
    [
        "nama" => "Samsung Galaxy A13",
        "gambar" => "samsunga13.jpg",
        "ram" => "6GB",
        "memori" => "64GB",
        "kamera" => "50 megapixel",
        "baterai" => "5000mAh"
    ],
];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"&gt>
    <title>Daftar Handphone Samsung</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="judul">DAFTAR HANDPHONE SAMSUNG TERBARU</h1>
            <ul>
                <li><a href="product.php">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    
    
        <div class="content">
            
                <?php foreach ($handphone as $hp) : ?>
                    <div class="list-produk">
                        <ul>
                            <img class="gambar" src="image/<?= $hp["gambar"]; ?>">
                            <h2><?= $hp["nama"]; ?></h2>
                            <a class="tombol tombol-detail" href="detail_product.php?nama=<?= $hp["nama"]; ?>&ram=<?= $hp["ram"]; ?>&memori=<?= $hp["memori"]; ?>&kamera=<?= $hp["kamera"]; ?>&baterai=<?= $hp["baterai"]; ?>">Detail Produk</a>
                        </ul>
                    </div>
                <?php endforeach; ?>
            
            
        </div>
        
    </div>
</body>
</html>


