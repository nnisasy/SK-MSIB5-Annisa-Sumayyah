<?php
include 'main.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="position-sticky pt-3 sidebar-sticky">

            <!-- SIDEBAR START -->
            <?php include 'sidebar.php' ?>
            <!-- SIDEBAR END -->

            <!-- CONTENT START -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2><i class="bi-cart"></i> Produk<small style="font-size: 14px;"> Data Buket</small></h2>
                </div>

                <?php
                include '../conn.php';
                $query = mysqli_query($conn, "SELECT * from buket as b join kategori as k on b.id_kategori = k.id_kategori join sizebuket as sb on b.id_sizebuket = sb.id_sizebuket JOIN status as s on b.id_status = s.id_status ORDER BY b.id_buket ASC;");
                ?>

                <center><a class="btn btn-info" style="margin-top: 20px;margin-bottom: 20px;" href="tambah.php"><b>+ Tambah Produk</b></a></center>

                <!-- DATA TABLE START -->
                <table class="table table-sm table-striped table-hover table-bordered" id="myTable">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Buket</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Size</th>
                            <th>Status</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query) > 0) {
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td> <?php echo $no ?></td>
                                    <td> <?php echo $data["nama_buket"] ?> </td>
                                    <td> <img src="<?php echo $data["gambar"] ?>" width="100"> </td>
                                    <td> <?php echo $data["nama_kategori"] ?> </td>
                                    <td> <?php echo $data["nama_size"] ?></td>
                                    <td> <span class="badge text-bg-<?php echo generateBadge($data["nama_status"]) ?>"><?php echo $data["nama_status"] ?></span></td>
                                    <td> <?php echo "Rp. " . number_format($data["harga"], 0, ',', '.') ?></td>
                                    <td>
                                        <a href="edit.php?id_buket=<?php echo $data["id_buket"] ?>" class="btn btn-warning btn-sm text-white"><i class="bi-pencil-square"></i></a>
                                        <a href="proses_hapus.php?id_buket=<?php echo $data["id_buket"] ?>" class="btn btn-danger btn-sm d-inline" onclick="return confirm('Data Akan Dihapus?')"><i class="bi-trash-fill"></i></a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        <?php } ?>
                    </tbody>
                </table>
                <!-- DATA TABLE END -->
            </main>
            <!-- CONTENT END -->
        </div>
    </div>
</div>

<?php
function generateBadge($status)
{
    switch ($status) {
        case "Available":
            $style = "primary";
            break;
        case "Restock":
            $style = "warning";
            break;
        case "Unavailable":
            $style = "danger";
            break;
        default:
            $style = "default";
            break;
    }

    return $style;
}
?>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>