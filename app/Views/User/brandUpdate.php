<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        .box {
            background-color: #f2f2f2;
            align-items: center;
            width: 100%;
            height: 100vh !important;
        }

        .one {
            box-shadow: 10px 10px 10px;
            background-color: #fff;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="box">

        <div class="container-fuild">
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    <div class="row bg-white p-3 m-5 one">

                        <h1 class="text-center">Edit Brand</h1>
                        <div class="col-md-5 ">
                            <a href="<?= base_url('Brand') ?>" class="btn btn-outline-danger">
                                << Back</a>
                        </div>
                        <div class="row justify-content-center ">
                            <div class="col-md-6 text-center">


                                <form action="<?= base_url('User/brandUpdate/') . $brand['ID'] ?>" method="post" class="cd-md-12">

                                    <div class="col-md-10 ">
                                        <div class="form-group mb-6">
                                            <label for="Name" class="text-center m-3 fs-3">Change Brand Name</label>
                                            <input type="text" name="Brand" value="<?= $brand['Brand']; ?>" placeholder="Enter The category" class="form-control" id="">

                                        </div>
                                    </div>

                                    <div class="col-md-10 pt-3">
                                        <div class="form-group mb-6">
                                            <input type="submit" value="Upadte Brand" class="btn btn-outline-primary">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<!-- main body -->


<!-- main Content  -->



<!-- main content end     -->



<!-- end body -->