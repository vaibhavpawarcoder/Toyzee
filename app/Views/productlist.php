<?= $this->extend("Main/base");  ?>


<?= $this->section("mymenu") ?>

<div class="row">
    <div class="col-md-4 header-navigation-col">
        <h4>Toys & Games</h4>
        <ul>
            <?php foreach ($subCate as $row) : ?>
                <li><a href="#"><?= $row['subCategory'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col-md-4 header-navigation-col">
        <h4>Brand</h4>
        <ul>
            <?php foreach ($brand as $row) : ?>
                <li><a href="#"><?= $row['Brand'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col-md-4 header-navigation-col">
        <h4>Age Range</h4>
        <ul>
            <?php foreach ($age as $row) : ?>
                <li><a href="#"><?= $row['ageFrom'] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="col-md-12 nav-brands">
        <ul>
            <li><a href="#"><img title="esprit" alt="esprit" src="mainassets/pages/img/brands/esprit.jpg"></a></li>
            <li><a href="#"><img title="gap" alt="gap" src="mainassets/pages/img/brands/gap.jpg"></a></li>
            <li><a href="#"><img title="next" alt="next" src="mainassets/pages/img/brands/next.jpg"></a></li>
            <li><a href="#"><img title="puma" alt="puma" src="mainassets/pages/img/brands/puma.jpg"></a></li>
            <li><a href="#"><img title="zara" alt="zara" src="mainassets/pages/img/brands/zara.jpg"></a></li>
        </ul>
    </div>
</div>
<?= $this->endsection() ?>


<?= $this->section("mycontent") ?>


<div class="title-wrapper">
    <div class="container">
        <div class="container-inner">
            <h1><span>Toys</span> CATEGORY</h1>
            <em>"Where Imagination Comes to Play!"</em>
        </div>
    </div>
</div>

<div class="main">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Men category</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-5">
                <ul class="list-group margin-bottom-25 sidebar-menu">
                    <li class="list-group-item clearfix"><a href="<?= base_url() ?>ProductList"><i class="fa fa-angle-right"></i> Product</a></li>

                    <li class="list-group-item clearfix dropdown ">
                        <a href="javascript:void(0);" class="collapsed">
                            <i class="fa fa-angle-right"></i>
                            Category 

                        </a>
                        <ul class="dropdown-menu" style="display:block;">

                            <!-- <li class="list-group-item dropdown clearfix ">
                                <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                                <ul class="dropdown-menu" style="display:block;">
                                    <li class="list-group-item dropdown clearfix">
                                        <a href="javascript:void(0);"><i class="fa fa-angle-right"></i> Classic </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item dropdown clearfix ">
                                        <a href="javascript:void(0);" class="collapsed"><i class="fa fa-angle-right"></i> Sport </a>
                                        <ul class="dropdown-menu" style="display:block;">
                                            <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

                            <?php foreach ($subCate as $row) : ?>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> <?= $row['subCategory'] ?></a></li>
                            <?php endforeach; ?>
                            <!-- <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li> -->
                        </ul>
                    </li>

                    <li class="list-group-item clearfix dropdown ">
                        <a href="javascript:void(0);" class="collapsed">
                            <i class="fa fa-angle-right"></i>
                            Age

                        </a>
                        <ul class="dropdown-menu" style="">

                            <?php foreach ($age as $row) : ?>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> <?= $row['ageFrom'] ?></a></li>
                            <?php endforeach; ?>
                            <!-- <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li> -->
                        </ul>
                    </li>

                    <li class="list-group-item clearfix dropdown ">
                        <a href="javascript:void(0);" class="collapsed">
                            <i class="fa fa-angle-right"></i>
                            Brand

                        </a>
                        <ul class="dropdown-menu" style="">

                            <?php foreach ($brand as $row) : ?>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> <?= $row['Brand'] ?></a></li>
                            <?php endforeach; ?>
                            <!-- <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li> -->
                        </ul>
                    </li>
                    <!-- <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sports</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Brands</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Electronics</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Home & Garden</a></li>
                    <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Custom Link</a></li> -->
                </ul>

                <div class="sidebar-filter margin-bottom-25">
                    <h2>Filter</h2>
                    <h3>Availability</h3>
                    <div class="checkbox-list">

                        <label><input type="checkbox"> In Stock (26)</label>
                        <label><input type="checkbox"> Out Stock (12)</label>

                    </div>
                </div>

                <div class="sidebar-filter margin-bottom-25">
                    <h2>Price</h2>
                    <h3>Availability</h3>
                    <div class="checkbox-list">

                        <label><input type="checkbox"> In Stock (26)</label>
                        <label><input type="checkbox"> Out Stock (12)</label>

                    </div>
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="row list-view-sorting clearfix">
                    <div class="col-md-2 col-sm-2 list-view">
                        <a href="javascript:;"><i class="fa fa-th-large"></i></a>
                        <a href="javascript:;"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="pull-right">
                            <label class="control-label">Show:</label>
                            <select class="form-control input-sm">
                                <option value="#?limit=24" selected="selected">24</option>
                                <option value="#?limit=25">25</option>
                                <option value="#?limit=50">50</option>
                                <option value="#?limit=75">75</option>
                                <option value="#?limit=100">100</option>
                            </select>
                        </div>
                        <div class="pull-right">
                            <label class="control-label">Sort&nbsp;By:</label>
                            <select class="form-control input-sm">
                                <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- BEGIN PRODUCT LIST -->
                <div class="row product-list">
                    <!-- PRODUCT ITEM START -->

                    <div class="row">
                        <?php foreach ($product as $row) : ?>
                            <div class="col-md-3">
                                <div class="product-item">
                                    <div class="pi-img-wrapper">
                                        <img src="ProductImage/<?= $row['pic1']; ?>" style="width: 100%; height:250px;" class="img-fluid" alt="<?= $row['pic1']; ?>">

                                    </div>
                                    <p class="fs-4 p-3 fw-bold"><?= $row['product']; ?></a></p>

                                    <p class=" fs-1 fw-bold">Price :- <?= $row['disscount']; ?></a></p>
                                    <a href="<?= base_url('BuyProduct/' . $row['ID']) ?>" class="btn btn-outline-danger  ">Add To Cart</a>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    <!-- END PRODUCT LIST -->
                    <!-- BEGIN PAGINATOR -->

                    <!-- <div class="row">
                    <div class="col-md-3 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
                    <div class="col-md-8 col-sm-8">
                        <ul class="pagination pull-right">
                            <li><a href="javascript:;">&laquo;</a></li>
                            <li><a href="javascript:;">1</a></li>
                            <li><span>2</span></li>
                            <li><a href="javascript:;">3</a></li>
                            <li><a href="javascript:;">4</a></li>
                            <li><a href="javascript:;">5</a></li>
                            <li><a href="javascript:;">&raquo;</a></li>
                        </ul>
                    </div>
                </div> -->

                    <!-- END PAGINATOR -->
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>

    <?= $this->endsection() ?>