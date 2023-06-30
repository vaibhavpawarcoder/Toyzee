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
                        <p class="text-success">
                            <?php
                            if (session()->getFlashdata('status')) {
                                echo "<h3>" . session()->getFlashdata('status') . " </h3>";
                            }
                            ?>
                        </p>
                        <!-- <a href="<?= base_url('add-category') ?>" class="btn btn-outline-primary">Edit Category <span class="fs-1">+</span></a> -->



                        <!-- Button trigger modal -->
                        <div class="row">
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Edit Category ++
                                </button>
                            </div>
                            <div class="col-md-12">
                            <span class="text-danger fw-bolder"><?= display_error($validation, 'Category'); ?> </span>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body">
                                            <?= form_open(); ?>
                                            <div class="row g-3 needs-validation" novalidate>
                                                <div class="col-md-10 mb-4">
                                                    <label for="validationCustom01" class="form-label">Category name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" value="<?= set_value('Category'); ?>" placeholder="Enter Category Name" name="Category">
                                                    <span class="text-danger"><?= display_error($validation, 'Category'); ?> </span>

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




                        <!-- Table -->

                        <table class="table" id="mydatatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($userInfo  as $row): ?>
                                <tr>
                                    <th scope="row"><?= $row['ID']; ?></th>
                                    <td><?= $row['Category']; ?></td>
                                    <td>
                                        <a href="<?= base_url('User/updateCategory/' . $row['ID']) ?>" class="btn btn-outline-success">Edit</a>
                                        <a href=" <?= base_url('User/removeCategory/' . $row['ID']) ?>" class="btn btn-danger">Remove</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>

<!-- main content end     -->



<!-- end body -->






<?= $this->endsection() ?>