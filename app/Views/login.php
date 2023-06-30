<?= $this->extend("Main/base");  ?>

<?= $this->section("mymenu") ?>

<div class="row">
    <div class="col-md-4 header-navigation-col">
        <h4>Toys & Games</h4>
        <ul>
            <?php foreach ($subCate as $row) : ?>
                <li><a href="<?= base_url('Search/') . $row['subCategory'] ?>"><?= $row['subCategory'] ?></a></li>
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

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
            

        </div>
        <div class="col-md-6 ">
            <a href="<?= base_url()?>UserAccount">Creat A Account</a>
            <?= form_open_multipart(); ?>

            

            <?= form_close(); ?>
        </div>
    </div>
</div>


<?= $this->endsection() ?>