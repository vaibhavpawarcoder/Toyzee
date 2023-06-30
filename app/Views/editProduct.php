<?= $this->extend("Admin/base");  ?>

<?= $this->section("mycontent") ?>

<!-- main body -->


<!-- main Content  -->

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <h1>Add Product</h1>
                        
                        <div class="col-md-11  bg-white p-5">
                            <?= form_open_multipart(); ?>
                            <div class="row g-3 needs-validation" novalidate>
                                
                                <div class="col-md-6 mb-4">
                                    <label for="validationCustom01" class="form-label">Product name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="<?= set_value('product'); ?>" placeholder="Enter Product Name" name="product">
                                    <span class="text-danger"><?= display_error($validation, 'product'); ?> </span>
                                </div>

                                <div class="col-md-6 mb-3 mt-3">
                                            <label for="validationCustom01" class="form-label">Delivery By (how may dys it's take to delivery)</label><br>
                                            <input type="number" class="form-control" id="validationCustom01" value="<?= set_value('delivery'); ?>" placeholder="Enter delivery Date" name="delivery">

                                        </div>
                                

                                <div class="col-md-3">
                                    <label for="validationCustom02" class="form-label">Select Category</label><br>
                                    <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" name="category" value="<?= set_value('category') ?>">
                                        <option>Open this select menu</option>
                                        <?php foreach ($Categorymodel as $row) : ?>
                                            <option value="<?= $row['Category'] ?>"><?= $row['Category'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <span class="text-danger">

                                    </span>
                                </div>

                                <div class="col-md-3">
                                    <label for="validationCustom02" class="form-label">Select Sub Category</label><br>
                                    <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" name="subcategory" value="<?= set_value('subcategory') ?>">
                                        <option class="fs-5">Open this select menu</option>
                                        <?php foreach ($SubCate as $row) : ?>
                                            <option value="<?= $row['subCategory'] ?>"><?= $row['subCategory'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <span class="text-danger">

                                    </span>
                                </div>

                                <div class="col-md-3">
                                    <label for="validationCustom02" class="form-label">Select Brand</label><br>
                                    <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" name="brand" value="<?= set_value('brand') ?>">
                                        <option>Open this select menu</option>
                                        <?php foreach ($Brandmodel as $row) : ?>
                                            <option value="<?= $row['Brand'] ?>"><?= $row['Brand'] ?></option>
                                        <?php endforeach ?>

                                    </select>
                                    <span class="text-danger">

                                    </span>
                                </div>

                                <div class="col-md-3">
                                    <label for="validationCustom02" class="form-label">Select AgeGroup</label><br>
                                    <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" name="age" value="<?= set_value('age') ?>">
                                        <option>Open this select menu</option>
                                        <?php foreach ($Agemodel as $row) : ?>
                                            <option value="<?= $row['ageFrom'] ?>"><?= $row['ageFrom'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <span class="text-danger">

                                    </span>
                                </div>

                                <div class="col-md-3 mb-4 mt-4">
                                    <label for="validationCustom01" class="form-label">MRP Price</label>
                                    <input type="number" class="form-control" id="validationCustom01" placeholder="Enter MRP Price" name="mrp" value="<?= set_value('mrp') ?>">
                                    <span class="text-danger"><?= display_error($validation, 'mrp'); ?> </span>
                                </div>

                                <div class="col-md-3 mb-4 mt-4">
                                    <label for="validationCustom02" class="form-label">offer</label><br>
                                    <input type="number" class="form-control" id="validationCustom01" placeholder="Enter Offer " name="offer"  value="<?= set_value('offer') ?>" id="">
                                    <span class="text-danger">
                                    <span class="text-danger"><?= display_error($validation, 'offer'); ?> </span>
                                    </span>
                                </div>

                                <div class="col-md-3 mb-4 mt-4">
                                    <label for="validationCustom01" class="form-label">Quentity</label>
                                    <input type="number" class="form-control" id="validationCustom01" placeholder="Enter Product Name" name="quentity" value="<?= set_value('quentity') ?>">
                                    <span class="text-danger"><?= display_error($validation, 'quentity'); ?> </span>
                                </div>

                                <div class="col-md-3 mb-4 mt-4">
                                    <label for="validationCustom01" class="form-label">Available</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Product Name" value="In stock" name="avibility" value="<?= set_value('avibility') ?>">
                                    <span class="text-danger"><?= display_error($validation, 'avibility'); ?> </span>
                                </div>


                                <div class="col-md-12 mb-4 mt-4">
                                    <label for="exampleFormControlTextarea1" class="form-label">Short Information </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="shortinfo" value="<?= set_value('shortinfo') ?>"><?= set_value('shortinfo') ?></textarea>
                                    <span class="text-danger"><?= display_error($validation, 'shortinfo'); ?> </span>
                                </div>

                                <div class="col-md-12 mb-4 mt-4">
                                    <label for="exampleFormControlTextarea1" class="form-label">ckeditor Information </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ckeditor" value="<?= set_value('ckeditor') ?>"><?= set_value('ckeditor') ?></textarea>
                                </div>


                                <div class="col-md-6 mb-3 mt-3">
                                    <label for="validationCustom01" class="form-label">Picture</label>
                                    <input type="file" class="form-control" id="validationCustom01" name="pic1">
                                    <span class="text-danger"><?= display_error($validation, 'pic1'); ?> </span>
                                </div>
                                <div class="col-md-6 mb-3 mt-3">
                                    <label for="validationCustom01" class="form-label">Picture</label>
                                    <input type="file" class="form-control" id="validationCustom01" name="pic2">
                                    <span class="text-danger"><?= display_error($validation, 'pic2'); ?> </span>
                                </div>
                                <div class="col-md-6 mb-3 mt-3">
                                    <label for="validationCustom01" class="form-label">Picture</label>
                                    <input type="file" class="form-control" id="validationCustom01" name="pic3">
                                    <span class="text-danger"><?= display_error($validation, 'pic3'); ?> </span>
                                </div>
                                <div class="col-md-6 mb-3 mt-3">
                                    <label for="validationCustom01" class="form-label">Picture</label>
                                    <input type="file" class="form-control" id="validationCustom01" name="pic4">
                                    <span class="text-danger"><?= display_error($validation, 'pic4'); ?> </span>
                                </div>




                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </div>

                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main content end     -->



<!-- end body -->






<?= $this->endsection() ?>