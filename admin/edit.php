<?php
include '../conn.php';
include 'main.php';

$buket = mysqli_query($conn, "SELECT * from buket where id_buket='$_GET[id_buket]'");

while ($b = mysqli_fetch_array($buket)) {
    $id_buket = $b["id_buket"];
    $nama_buket = $b["nama_buket"];
    $gambar = $b["gambar"];
    $kategori = $b["id_kategori"];
    $sizebuket = $b["id_sizebuket"];
    $status = $b["id_status"];
    $harga = $b["harga"];
}

?>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR START -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <div class="align-items-center bg-light text-white">
                    <img class="img-account-profile rounded-circle mb-2" style="display:block; margin:auto;" src="assets/img/logo/logo1.png" style="text-align: center" width="150">
                    <h6 class="text-center pb-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <span class="badge bg-secondary">Administrator</span>
                    </h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" style="font-family: Verdana, Geneva, Tahoma, sans-serif;font-size: 14px;">
                            <i class="bi-cart-fill"></i>
                            <b>Produk</b>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- SIDEBAR END -->

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1>Produk<small style="font-size: 14px;"> Data Buket</small></h1>
            </div>

            <!-- MENU CREATE  -->
            <div class="card" style="margin-top: 30px; margin-bottom: 30px;">
                <div class="card-body">
                    <h3>Form Edit</h3><br>

                    <!-- FORM CREATE DATA -->
                    <form action="proses_edit.php?id_buket=<?php echo $id_buket ?>" method="post" enctype="multipart/form-data">
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Nama Buket</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama_buket" name="nama_buket" value="<?php echo $nama_buket ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <img src="../admin/<?php echo $gambar ?>" width="100">
                                <input type="file" id="fileToUpload" name="fileToUpload" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="kategori" name="kategori">
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM kategori");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            $selected = ($data["id_kategori"] == $kategori) ? 'selected' : '';
                                            echo "<option value='" . $data["id_kategori"] . "' $selected>" . $data["nama_kategori"] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No items available</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Size</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="sizebuket">
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM sizebuket");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            $selected = ($data["id_sizebuket"] == $sizebuket) ? 'selected' : '';
                                            echo "<option value='" . $data["id_sizebuket"] . "' $selected>" . $data["nama_size"] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No items available</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="status">
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM status");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            $selected = ($data["id_status"] == $status) ? 'selected' : '';
                                            echo "<option value='" . $data["id_status"] . "' $selected>" . $data["nama_status"] . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No items available</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="number" id="harga" name="harga" value="<?php echo $harga ?>" class="form-control">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" id="submit" name="submit" value="Simpan" class="btn btn-primary" onclick="confirm('Data Akan Diupdate?')">
                            <a href="index.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>