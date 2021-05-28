<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>SIVENTRY</h1>
        <h2>Sistem Inventory</h2>
</header>
<div class="header">
    <div class="header-logo">Zihan Zaenal Abidin</div>
</div>
<nav>
    <a href="">Items</a>
    <a href="">Transaction Type</a>
    <a href="">Transaction</a>
    <a href="">Transaction Details</a>
</nav>
    <center><h3>Tabel Items</h3></center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  items';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['code']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['quantity']?></td>
                <td><?php echo $row['keterangan']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <center><h3>Tabel Type Transaction</h3></center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  transaction_types';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['code']?></td>
                <td><?php echo $row['name']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <center><h3>Tabel Transaksi</h3></center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type ID</th>
                <th>Transaction Code</th>
                <th>Transaction Date</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  transaction';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['type_id']?></td>
                <td><?php echo $row['trans_code']?></td>
                <td><?php echo $row['trans_date']?></td>
                <td><?php echo $row['keterangan']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <center><h3>Tabel Transaction Details</h3></center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Transaction ID</th>
                <th>Item ID</th>
                <th>Quantity</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM  transaction_details';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['trans_id']?></td>
                <td><?php echo $row['item_id']?></td>
                <td><?php echo $row['quantity']?></td>
                <td><?php echo $row['keterangan']?></td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    <br> <br>
    <footer>
        <p>&copy; 2021 - Sistem Basis Data</p>
    </footer>
</body>
</html>