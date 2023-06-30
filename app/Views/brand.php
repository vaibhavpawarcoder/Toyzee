<?= $this->extend("Admin/base");  ?>

<?= $this->section("mycontent") ?>

<!-- main body -->



<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <p class="text-success">
                            <?php
                            if (session()->getFlashdata('status')) {
                                echo "<h3>" . session()->getFlashdata('status') . " </h3>";
                            }
                            ?>
                        </p>

                        <!-- <a href="<?= base_url('add-Brand') ?>" class="btn btn-outline-primary">Edit Category <span class="fs-1">+</span></a> -->

                        <!-- Button trigger modal -->
                        <div class="row">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Edit Brand ++
                                </button>
                            </div>

                            <div class="col-md-12 m-5">
                            <span class="text-danger fw-bolder"><?= display_error($validation, 'Brand'); ?> </span>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Add Brand Name</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body">
                                            <?= form_open(); ?>
                                            <div class="row g-3 needs-validation" novalidate>



                                                <div class="col-md-10 mb-4">
                                                    <label for="validationCustom01" class="form-label">Enter Brand Name </label>
                                                    <input type="text" class="form-control" id="validationCustom01" value="<?= set_value('Brand'); ?>" placeholder="Enter Brand Name" name="Brand">
                                                    <span class="text-danger"><?= display_error($validation, 'Brand'); ?> </span>

                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                                </div>
                                            </div>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-border" id="mydatatable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Brand</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($Brand as $row) : ?>
                                        <tr>
                                            <td><?= $row['ID']; ?></td>
                                            <td><?= $row['Brand']; ?></td>
                                            <td>
                                                <a href="<?= base_url('User/createBrand/' . $row['ID']) ?>" class=" btn btn-outline-success m-1">Edit</a>

                                                
                                                <a href="<?= base_url('User/Brandremove/' . $row['ID']) ?>" class=" btn btn-outline-danger m-1">Remove</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endsection() ?>