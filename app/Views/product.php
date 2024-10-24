<!DOCTYPE html>
<html lang="en">

<?php require('components/head.php')?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/custom/css/product.css">

<?php require('components/header.php')?>


<body class="home-1">
    <section class="section-tb-padding ">
        <div class="container">
            <div class="row">

            
                <div class="col-lg-3 col-md-4 col-12 d-none d-lg-inline">
                    <div class="all-filter">
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Categories</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-option collapse" id="category-filter">
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Food <span class="grid-items">(4)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Treats<span class="grid-items">(6)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Toys <span class="grid-items">(8)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Health & Hygiene <span
                                            class="grid-items">(7)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Brushes & Combos<span class="grid-items">(3)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Shampoo<span class="grid-items">(10)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Towels & Wipes<span class="grid-items">(12)</span></a>
                                </li>
                                <li class="grid-list-option">
                                    <input type="checkbox">
                                    <a href="javascript:void(0)">Conditioner<span class="grid-items">(11)</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="price-filter">
                            <h4 class="filter-title">Filter by price</h4>
                            <a href="#price-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by price
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-price collapse" id="price-filter">
                                <price-range class="price-range">
                                    <div class="price-range-group group-range">
                                        <input type="range" class="range" min="0" max="18999" value="18" id="range1">
                                        <input type="range" class="range" min="0" max="18999" value="15000" id="range2">
                                    </div>
                                    <div class="price-input-group group-input">
                                        <div class="price-range-input input-prefix">
                                            <label class="input-prefix-label">From</label>
                                            <span class="input-prefix-value">₹ <span id="demo1"></span></span>
                                        </div>
                                        <span class="price-range-delimeter">-</span>
                                        <div class="price-range-input input-prefix">
                                            <label class="input-prefix-label">To</label>
                                            <span class="input-prefix-value">₹ <span id="demo2"></span></span>
                                        </div>
                                    </div>
                                </price-range>
                            </ul>
                        </div>
                        <div class="vendor-filter">
                            <h4 class="filter-title">Filter By Brand</h4>
                            <a href="#vendor" data-bs-toggle="collapse" class="filter-link"><span>Filter by vendor
                                </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-vendor collapse" id="vendor">
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Kolan</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Pedigree</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Kong</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Orijien</label>
                                </li>
                                <li class="f-vendor">
                                    <input type="checkbox">
                                    <label>Goodies</label>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-12 ">
                    <div class="grid-list-area">
                        <div class="grid-list-select">
                            <ul class="grid-list">
                            </ul>
                            <ul class="grid-list-selector">
                                <li>
                                    <label>Sort by</label>
                                    <select>
                                        <option>High to low</option>
                                        <option>Low to High</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="grid-pro">
                            <div class="row" id="product_container">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require('components/footer.php')?>
    <?php require('components/js.php')?>


    <script type="text/javascript">
     var productData = <?= json_encode($parameter); ?>;  // Get product ID from PHP     
    </script>

<script src="<?= base_url() ?>assets/custom/js/product.js"></script>



</body>

</html>