
<?php
$produk = [
    [
        "no" => "01",
        "nama" => "papan tulis",
        "harga" => "Rp. 20.000",
        "stok" => "20 barang"
    ],
    [
        "no" => "02",
        "nama" => "rak buku",
        "harga" => "Rp. 28.000",
        "stok" => "40 barang"
    ]
];

// Menentukan jumlah produk
$total_produk = count($produk);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <div class="navbar">
        <span class="logo">hera's mart</span>
        </div>
    </header>
    <div class="sidebar">
        <div class="sidebar-title">
            Menu Utama
        </div>
        <a href="index.php" class="active">
            ▦ &nbsp; Dashboard
        </a>
        <a href="#">
            ♧ &nbsp; Orders
        </a>
        <a href="#">
            ▣ &nbsp; Products
        </a>
        <a href="#">
            ♙ &nbsp; Customers
        </a>
        <a href="#">
            ▤ &nbsp; Reports
        </a>
        <a href="#">
            ⚙ &nbsp; Integrations
        </a>
        <div class="sidebar-bottom">
            <a href="#">
                ⇥ &nbsp; Sign out
            </a>
        </div>
    </div>

<main class="content">
    <section class="page-header">
    <h2>Dashboard</h2>
    </section>

     <section class="product-section">
     <h3>Data Produk</h3>
     <div class="product-action">
      <button type="button"
          onclick="alert('Fitur tambah produk belum tersedia.')">
              Add Product
             </button>
            </div>

     <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
             <th>Aksi</th>
            </tr>
             </thead>

         <tbody>
            <?php foreach ($produk as $item) { ?>
            <tr>
            <td>
             <?php echo $item["no"]; ?>
            </td>
             <td>
             <?php echo $item["nama"]; ?>
            </td>
            <td>
           <?php echo $item["harga"]; ?>
           </td>
            <td>
             <?php echo $item["stok"]; ?>
             </td>
            <td class="action">
            <a href="#"
            onclick="return false">Edit</a>
             |
            <a href="#"
             onclick="return false">Hapus</a>
             </td>
        </tr>

        <?php } ?>
                </tbody>
            </table>

            <div class="table-info">
                Menampilkan <?php echo $total_produk; ?> produk
            </div>

        </section>

    </main>

</body>
</html>
