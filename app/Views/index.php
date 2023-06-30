<?= $this->extend("Main/base");  ?>

<?= $this->section("mymenu") ?>

<div class="row">
  <div class="col-md-4 header-navigation-col">
    <h4>Toys & Games</h4>
    <ul>
      <?php foreach($subCate as $row): ?>
        <li><a href="<?= base_url('Search/'). $row['subCategory'] ?>"><?= $row['subCategory'] ?></a></li>
      <?php endforeach; ?>  
    </ul>
  </div>
  <div class="col-md-4 header-navigation-col">
    <h4>Brand</h4>
    <ul>
    <?php foreach($brand as $row): ?>
        <li><a href="#"><?= $row['Brand'] ?></a></li>
      <?php endforeach; ?> 
    </ul>
  </div>
  <div class="col-md-4 header-navigation-col">
    <h4>Age Range</h4>
    <ul>
    <?php foreach($age as $row): ?>
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


<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-35">
  <div id="carousel-example-generic" class="carousel slide carousel-slider">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <!-- First slide -->
      <div class="item carousel-item-four active">
        <div class="container">
          <div class="carousel-position-four text-center">
            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
              Tones of <br /><span class="color-red-v2">Shop UI Features</span><br /> designed
            </h2>
            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">Lorem ipsum dolor sit amet constectetuer diam <br />
              adipiscing elit euismod ut laoreet dolore.</p>
          </div>
        </div>
      </div>

      <!-- Second slide -->
      <div class="item carousel-item-five">
        <div class="container">
          <div class="carousel-position-four text-center">
            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
              Unlimted
            </h2>
            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
              Layout Options
            </p>
            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
              Fully Responsive
            </p>
            <a class="carousel-btn" href="#" data-animation="animated fadeInUp">See More Details</a>
          </div>
          <img class="carousel-position-five animate-delay hidden-sm hidden-xs" src="mainassets/pages/img/shop-slider/slide2/price.png" alt="Price" data-animation="animated zoomIn">
        </div>
      </div>

      <!-- Third slide -->
      <div class="item carousel-item-six">
        <div class="container">
          <div class="carousel-position-four text-center">
            <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
              Full Admin &amp; Frontend
            </span>
            <p class="carousel-subtitle-v4" data-animation="animated fadeInDown">
              eCommerce UI
            </p>
            <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
              Is Ready For Your Project
            </p>
          </div>
        </div>
      </div>

      <!-- Fourth slide -->
      <div class="item carousel-item-seven">
        <div class="center-block">
          <div class="center-block-wrap">
            <div class="center-block-body">
              <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                The most <br />
                wanted bijouterie
              </h2>
              <a class="carousel-btn" href="#" data-animation="animated fadeInUp">But It Now!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
      <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>
  </div>
</div>
<!-- END SLIDER -->

<div class="container-fuild bg-light">

  <!-- Browse by Age -->
  <div class="row justify-content-center">
    <p class="text-center fs-1">~ Browse by Age ~</p>
    <?php foreach ($age as $row) : ?>
      <div class="col-md-3 m-1 p-1 bg-danger text-center">

        <form action="" method="post">

          <a href="<?= base_url() ?>ProductList" class="p-5 fs-3 text-white text-center text-decoration-none"><?= $row['ageFrom'] ?></a>
        </form>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- Browse by Age End-->

  <!-- New Arrival -->

  <div class="row justify-content-center mt-5 p-5">
    <p class="text-center fs-1">New Arrival Product</p>
    <?php foreach ($product as $row) : ?>

      <div class="col-md-2 bg-white col-12 m-2  p-1  text-center">

        <div class="row justify-content-center m-1 bg- p-2">
          <div class="col-md-10 col-12">
            <img src="ProductImage/<?= $row['pic1']; ?>" width="250px" class="img-fluid" alt="<?= $row['pic1']; ?>" srcset="">
            <p class="fs-3"><?= $row['product']; ?></p>
            <p class="fs-4">Price : <span class="fw-bold text-success"><?= $row['disscount'] ?></span> ( <span class="fw-bold text-decoration-line-through text-danger"><?= $row['mrp'] ?></span> )</p>
            <a href="<?= base_url('BuyProduct/' . $row['ID']) ?>" class="btn btn-outline-danger fs-5 border border-danger m-3">Buy Now</a>
          </div>

        </div>


      </div>
    <?php endforeach; ?>
    <div class="col-md-10 text-center mt-5">
      <a href="<?= base_url() ?>ProductList" class="btn btn-outline-danger fs-3 rounded-3">View More</a>
    </div>
  </div>
  <!-- Best Seller Product -->
  <div class="row justify-content-center mt-5 mb-5  bg-danger">
    <p class="text-center text-white mt-3 mb-3 fs-1">Bestseller Product</p>
    <?php foreach ($product as $row) : ?>

      <div class="col-md-2 bg-white col-10 m-2  p-1  text-center">

        <div class="row justify-content-center m-1 bg- p-2">
          <div class="col-md-10">
            <img src="ProductImage/<?= $row['pic1']; ?>" width="250px" class="img-fluid" alt="<?= $row['pic1']; ?>" srcset="">
            <p class="fs-3"><?= $row['product']; ?></p>
            <p class="fs-4">Price : <span class="fw-bold text-success"><?= $row['disscount'] ?></span> ( <span class="fw-bold text-decoration-line-through text-danger"><?= $row['mrp'] ?></span> )</p>
            <a href="<?= base_url('BuyProduct/' . $row['ID']) ?>" class="btn btn-outline-danger fs-5 border border-danger m-3">Buy Now</a>
          </div>
        </div>

      </div>
    <?php endforeach; ?>
  </div>

  <!-- Category -->

  <div class="row">

    <div class="col-md-6">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="mainassets/pages/img/index-sliders/slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="mainassets/pages/img/index-sliders/slide2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="mainassets/pages/img/index-sliders/slide3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="col-md-5">
      <div class="row justify-content-center mt-5 mb-5 p-5 bg-danger">
        <p class="text-center text-white mt-3 mb-3 fs-1">Bestseller Product</p>
        <?php foreach ($product as $row) : ?>

          <div class="col-md-2 bg-white col-10 m-2  p-1  text-center">
<p><?= $row['product']?></p>
            <div class="row justify-content-center m-1 bg- p-2">
              <div class="col-md-10">

              </div>
            </div>

          </div>
        <?php endforeach; ?>
      </div>
    </div>


  </div>


  <!-- New Arrival End -->
</div>
<!-- END BRANDS -->

<?= $this->endsection() ?>