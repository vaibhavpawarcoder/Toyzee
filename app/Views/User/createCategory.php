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
                        <a href="<?= base_url('Product_Category') ?>" class="btn btn-outline-danger"><span class="fs-1"> < < </span> Back</a>
                        </div>

                        <form action="<?= base_url('store-category')?>" method="post" class="cd-md-12">
                        
                        <div class="col-md-6 ">
                            <div class="form-group mb-3">
                                <label for="Name">Name</label>
                                <input type="text" name="name" placeholder="Enter The Name" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group mb-3">
                                <label for="Name">Email</label>
                                <input type="email" name="email" placeholder="Enter The Email" class="form-control" id="">
                            </div>
                        </div>

                        <div class="col-md-6 ">
                            <div class="form-group mb-3">
                                <label for="Name">Mobile</label>
                                <input type="text" name="Mobile" placeholder="Enter The Mobile" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group mb-3">
                                <label for="Name">Password</label>
                                <input type="password" name="pass" placeholder="Password" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="form-group mb-3">
                                <label for="Name">U ID</label>
                                <input type="text" name="Uid" placeholder="User name" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6 pt-3">
                            <div class="form-group mb-3">
                                <input type="submit" value="submit" class="btn btn-outline-success">
                            </div>
                        </div>

                        </form>

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