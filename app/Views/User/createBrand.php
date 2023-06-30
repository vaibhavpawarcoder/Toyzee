<?= $this->extend("Admin/base");  ?>

<?= $this->section("mycontent") ?>

<!-- main body -->


<!-- main Content  -->

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row bg-white p-3">
                        <div class="col-md-12 mt-2">
                            <a href="<?= base_url('Brand') ?>" class="btn btn-outline-danger"><span class="fs-1">
                                    < < </span> Back</a>
                        </div>
                        <div class="row">

                        <form action="<?= base_url('store-Brand') ?>" method="post" class="cd-md-12">

                            <div class="col-md-6 ">
                                <div class="form-group mb-6">
                                    <label for="Name">Brand</label>
                                    <input type="text" name="Brand" placeholder="Enter The category" class="form-control" id="">
                                    
                                </div>
                            </div>

                            <div class="col-md-6 pt-3">
                                <div class="form-group mb-6">
                                    <input type="submit" value="submit" class="btn btn-outline-success">
                                </div>
                            </div>

                        </form>
                        </div>


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