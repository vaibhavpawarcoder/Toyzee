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
                                    Edit Age Range ++
                                </button>
                            </div>
                            <div class="col-md-12 m-5">
                            <span class="text-danger fw-bolder"><?= display_error($validation, 'ageFrom'); ?> </span>
                            </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel"> Age Group Range </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body">
                                            <?= form_open(); ?>
                                            <div class="row g-3 needs-validation" novalidate>
                                                <div class="col-md-10 mb-4">
                                                    <label for="validationCustom02" class="form-label">Begin Age</label><br>
                                                    <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" name="ageFrom" value="<?= set_value('ageFrom') ?>">
                                                        <option>Select Begin AgeGroup</option>
                                                        <option value="0 - Month & 12 Month">0 - Month & 12 Month</option>
                                                        <option value="1 - Year & 2 Year">1 - Year & 2 Year</option>
                                                        <option value="2 - Year & 4 Year">2 - Year & 4 Year</option>
                                                        <option value="4 - Year & 6 Year">4 - Year & 6 Year</option>
                                                        <option value="6 - Year & 8 Year">6 - Year & 8 Year</option>
                                                        <option value="8 - Year & 10 Year">8 - Year & 10 Year</option>
                                                        <option value="10 - Year & 12 Year">10 - Year & 12 Year</option>
                                                        <option value="12 - Year & older">12 - Year & older</option>
                                                    </select>

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
                                    <th scope="col">Begin Age</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ageInfo as $row) : ?>
                                    <tr>
                                        <td><?= $row['ID'] ?></td>
                                        <td><?= $row['ageFrom'] ?></td>
                                        <td>
                                            <a href="<?= base_url('User/updateAge/' . $row['ID']) ?>"  class="btn btn-outline-success">Edit</a>
                                            <a  href=" <?= base_url('User/removeAge/' . $row['ID']) ?>" class="btn btn-danger">Remove</a>
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