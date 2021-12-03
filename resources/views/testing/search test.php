<?php
include “koneksi . php”;
?>
<html>

<head>
    <title> Pencarian </title>
</head>

<body>
    <form method=”post”>
        <input type=”text” name=”nt” placeholder=”cari….” />
        <input type=”submit” name=”cari2″ value=”cari”>
    </form>
    <table border=”1″ cellpadding=”5″ cellspacing=”5″>
        <tr>
            <th> No </th>
            <th> Nama Toko </th>
            <th> Domain </th>
            <th> Marketing </th>
        </tr>
        <?php
        // jika belum di cari
        if (!isset($_POST[‘cari2’])) {
            $no = 1;
            $sql = "select * from list";  // mengambil semua inputan
            $query = mysqli_query($db_link, $sql);
            while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <th><?php echo $no; ?></th>
                    <th width=”25%”><?php echo $data[‘nt’]; ?></th>
                    <th width=”30%”><?php echo $data[‘domain’]; ?></th>
                    <th width=”20%”><?php echo $data[‘marketing’]; ?></th>
                </tr>
            <?php
                    $no++;
                }
            }
            if (isset($_POST[‘cari2’])) {
                $no = 1;
                $cari = $_POST[‘nt’];
                $sql = "select * from list where nt like ‘%$cari%’ or domain like ‘%$cari%’ or marketing like ‘%$cari%'";
                $query = mysqli_query($db_link, $sql);
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                <tr>
                    <th><?php echo $no; ?></th>
                    <th><?php echo $data[‘nt’]; ?></th>
                    <th><?php echo $data[‘domain’]; ?></th>
                    <th><?php echo $data[‘marketing’]; ?></th>
            <?php
                    $no++;
                }
            }
            ?>
                </tr>
    </table>
</body>

</html>