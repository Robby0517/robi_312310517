<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {font-family: "Arial Black", arial;}
        table {border-collapse: collapse;}
        th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030;}
        th {background: #CCCCCC; font-size: 12px; border-color: #B0B0B0;}
    </style>
</head>
<body>
    <center><h1>Agen Tiket Bus Nyaman</h1></center>
    <h3>Tabel bus</h3>
    <table>
        <thead>
            <tr>
                <th>ID Bus</th>
                <th>Nomor Plat</th>
                <th>Kapasitas</th>
                <th>Merek</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = 'SELECT * FROM bus';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Bus'] ?></td>
                    <td><?php echo $row['Nomor_Plat'] ?></td>
                    <td><?php echo $row['Kapasitas'] ?></td>
                    <td><?php echo $row['Merek'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel detail_pemesanan</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pemesanan</th>
                <th>ID Bus</th>
                <th>Nomor Kursi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM Detail_Pemesanan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Pemesanan'] ?></td>
                    <td><?php echo $row['ID_Bus'] ?></td>
                    <td><?php echo $row['Nomor_Kursi'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel jadwal_keberangkatan_bus</h3>
    <table>
        <thead>
            <tr>
                <th>ID Jadwal</th>
                <th>ID Bus</th>
                <th>Tujuan</th>
                <th>Tanggal Berangkat</th>
                <th>Waktu Berangkat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM jadwal_keberangkatan_bus';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Jadwal'] ?></td>
                    <td><?php echo $row['ID_Bus'] ?></td>
                    <td><?php echo $row['Tujuan'] ?></td>
                    <td><?php echo $row['Tanggal_Barangkat'] ?></td>
                    <td><?php echo $row['Waktu_Berangkat'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel pelanggan</h3>
    <table>
        <thead>
            <tr>
                <th>ID pelanggan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>No Telepon</th>
                <th>Status Keanggotaan</th>
                <th>Tanggal Bergabung</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pelanggan';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Pelanggan'] ?></td>
                    <td><?php echo $row['Nama'] ?></td>
                    <td><?php echo $row['Alamat'] ?></td>
                    <td><?php echo $row['Tanggal_lahir'] ?></td>
                    <td><?php echo $row['No_Telepon'] ?></td>
                    <td><?php echo $row['Status_Keanggotaan'] ?></td>
                    <td><?php echo $row['Tanggal_Bergabung'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

    <h3>Tabel pemesanan tiket</h3>
    <table>
        <thead>
            <tr>
                <th>ID Pemesanan</th>
                <th>ID Pelanggan</th>
                <th>ID Jadwal</th>
                <th>Tanggal Pemesanan</th>
                <th>Jumlah Tiket</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = 'SELECT * FROM pemesanan_tiket';
            $query = mysqli_query($koneksi, $sql);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_Pemesanan'] ?></td>
                    <td><?php echo $row['ID_Pelanggan'] ?></td>
                    <td><?php echo $row['ID_Jadwal'] ?></td>
                    <td><?php echo $row['Tanggal_Pemesanan'] ?></td>
                    <td><?php echo $row['Jumlah_Tiket'] ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>