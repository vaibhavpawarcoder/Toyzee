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
                        <h1>Creat New Admin Account</h1>

                        <div class="col-md-11  bg-white p-5">
                            <?= form_open_multipart(); ?>

                            <div class="row g-3 needs-validation" novalidate>

                                <div class="col-md-6 mb-4">
                                    <label for="validationCustom01" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="<?= set_value('name'); ?>" placeholder="Enter Full Name" name="name">
                                    <span class="text-danger"><?= display_error($validation, 'name'); ?> </span> 
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="validationCustom01" class="form-label">User Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="<?= set_value('username'); ?>" placeholder="Enter User Name" name="username">
                                    <span class="text-danger"><?= display_error($validation, 'username'); ?> </span> 
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
                                    <input type="password" class="form-control" id="validationCustom01" value="<?= set_value('password'); ?>" placeholder="Enter Password" name="password">
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="validationCustom01" class="form-label">User Picture </label>
                                    <input type="file" class="form-control" id="validationCustom01" name="profile">
                                    <span class="text-danger"><?= display_error($validation, 'profile'); ?> </span> 
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