<div class="product-area mt-text-2" id="product">
    <div class="container custom-area-2 overflow-hidden">
        <div class="row">
            <div class="col-12 col-custom">
                <div class="section-title text-center mb-30">
                    <span class="section-title-1">Hadiah yang luar biasa</span>
                    <h3 class="section-title-3">Produk Pilihan </h3>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <?php
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="col-md-3 col-sm-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="product-image">
                                <a class="d-block" href="#">
                                    <img src="../admin/<?php echo $data['gambar'] ?>" alt="" width="250px" height="250px">
                                </a>
                            </div><br>
                            <div class="product-content">
                                <div class="product-title">
                                    <h4 class="title-2"> <a href="#"><?php echo $data['nama_buket'] ?></a></h4>
                                </div>
                                <div class="product-title">
                                    <h5 class="title-2"><span class="badge text-bg-<?php echo generateBadge($data["nama_kategori"]) ?>"><a href="#"><?php echo $data['nama_kategori'] ?></a></span></h5>
                                </div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price "><?php echo "Rp. " . number_format($data["harga"], 0, ',', '.') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div><br><br>