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
            <img src="mainassets/pages/img/index-sliders/slide2.jpg" alt="" srcset="">

        </div>
        <div class="col-md-6 ">
            <?= form_open_multipart(); ?>

            <div class="row p-5 needs-validation" novalidate>

                <div class="col-md-6 mb-4">
                    <label for="validationCustom01" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="validationCustom01" value="<?= set_value('name'); ?>" placeholder="Enter Full Name" name="name">
                    <span class="text-danger"><?= display_error($validation, 'name'); ?> </span> 
                </div>

                <div class="col-md-6 mb-4">
                    <label for="validationCustom01" class="form-label">Pincode</label>
                    <input type="number" class="form-control" id="validationCustom01" value="<?= set_value('pincode'); ?>" placeholder="Enter Pincode Number" name="pincode">
                    <span class="text-danger"><?= display_error($validation, 'pincode'); ?> </span> 
                </div>

                <div class="col-md-6 mb-4">
                    <label for="validationCustom01" class="form-label">Enter Email</label>
                    <input type="email" class="form-control" id="validationCustom01" value="<?= set_value('email'); ?>" placeholder="Enter Email" name="email">
                    <span class="text-danger"><?= display_error($validation, 'email'); ?> </span> 
                </div>


                <div class="col-md-6 mb-4">
                    <label for="validationCustom01" class="form-label">Mobile </label>
                    <input type="number" class="form-control" id="validationCustom01" value="<?= set_value('mobile'); ?>" placeholder="Enter Mobile" name="mobile">
                    <span class="text-danger"><?= display_error($validation, 'mobile'); ?> </span> 
                </div>

                <div class="col-md-6 mb-4">
                    <label for="validationCustom01" class="form-label">Password </label>
                    <input type="password" class="form-control" id="validationCustom01"  placeholder="Enter Password" name="password">
                </div>

                <div class="col-md-6 mb-4">
                    <label for="validationCustom01" class="form-label">User Picture </label>
                    <input type="file" class="form-control" id="validationCustom01" name="profile">
                    <span class="text-danger"><?= display_error($validation, 'profile'); ?> </span> 
                </div>

                <div class="col-12">
                    <button class="btn btn-outline-danger" type="submit">Submit </button>
                </div>
                <a href="<?= base_url() ?>Login" class="fs-3 text-dark ">Alredy have Account</a>
            </div>

            <?= form_close(); ?>
        </div>
    </div>
</div>


<?= $this->endsection() ?>