<?php
include '../conn.php';
include 'main.php';
?>

<div class="container-fluid">
    <div class="row">

        <!-- SIDEBAR START -->
        <?php include 'sidebar.php' ?>
        <!-- SIDEBAR END -->

        <!-- CONTENT START -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2><i class="bi-cart"></i> Produk<small style="font-size: 14px;"> Data Buket</small></h2>
            </div>

            <div class="card" style="margin-top: 30px; margin-bottom: 30px;">
                <div class="card-body">
                    <h3>Form Tambah</h3><br>

                    <!-- FORM CREATE DATA START -->
                    <form action="proses_tambah.php" method="post" name="form-tambah" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Buket</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama_buket" name="nama_buket" onkeyup="checkform()" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" id="fileToUpload" name="fileToUpload" onkeyup="checkform()" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="kategori" name="kategori" onkeyup="checkform()">
                                    <?php
                                    // Fetch data from the "items" table
                                    $query = mysqli_query($conn, "SELECT * FROM kategori");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $data["id_kategori"] . "'>" . $data["nama_kategori"] . "</option>";
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
                                <select class="form-select" name="sizebuket" onkeyup="checkform()">
                                    <?php
                                    // Fetch data from the "items" table
                                    $query = mysqli_query($conn, "SELECT * FROM sizebuket");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $data["id_sizebuket"] . "'>" . $data["nama_size"] . "</option>";
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
                                <select class="form-select" name="status" onkeyup="checkform()">
                                    <?php
                                    // Fetch data from the "items" table
                                    $query = mysqli_query($conn, "SELECT * FROM status");
                                    if (mysqli_num_rows($query) > 0) {
                                        while ($data = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $data["id_status"] . "'>" . $data["nama_status"] . "</option>";
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
                                <input type="number" id="harga" name="harga" onkeyup="checkform()" class="form-control">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <input type="submit" id="submit" name="submit" value="Simpan" class="btn btn-primary" disabled onclick="alert('Data Berhasil Disimpan!')">
                            <a href="index.php" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                    <!-- FORM CREATE DATA END -->

                </div>
            </div>
        </main>
        <!-- CONTENT END -->
    </div>
</div>

<script>
    function checkform() {
        var f = document.forms['form-tambah'].elements;
        var fieldsMustBeFilled = true;

        for (var i = 0; i < f.length; i++) {
            if (f[i].value.length == 0)
                fieldsMustBeFilled = false;
        }

        if (fieldsMustBeFilled) {
            document.getElementById("submit").disabled = false;
        } else {
            document.getElementById("submit").disabled = true;
        }
    }
</script>