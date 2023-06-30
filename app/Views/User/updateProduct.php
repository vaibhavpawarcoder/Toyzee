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

    
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
</head>

<body>
    <div class="box">

        <div class="container-fuild">
            <div class="row justify-content-center">
                <div class="col-md-10 ">
                    <div class="row bg-white p-3 m-5 one">

                        <h1 class="text-center">Update Product</h1>
                        <div class="col-md-5 ">
                            <a href="<?= base_url('ViewProduct') ?>" class="btn btn-outline-danger">
                                << Back</a>
                        </div>
                        <div class="row">
                            <div class="col-md-11  bg-white p-5">
                                <form action="<?= base_url('User/productUpdate/') . $product['ID'] ?>" enctype="multipart/form-data" method="post" class="cd-md-12">
                                    <div class="row g-3 needs-validation" novalidate>
                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01" class="form-label">Product name</label>
                                            <input type="text" class="form-control" id="validationCustom01" value="<?= $product['product'] ?>" name="product">
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label for="validationCustom01" class="form-label">Product Specification</label>
                                            <input type="text" class="form-control" id="validationCustom01" value="<?= $product['specification'] ?>" name="specification" readonly>

                                        </div>

                                        <div class="col-md-3">
                                            <label for="validationCustom02" class="form-label"> Category</label><br>
                                            <input type="text" class="form-control" id="validationCustom01" value="<?= $product['category'] ?>" name="category">
                                        </div>

                                        <div class="col-md-3">
                                            <label for="validationCustom02" class="form-label">Select Sub Category</label><br>
                                            <input type="text" class="form-control" id="validationCustom01" value="<?= $product['subcategory'] ?>" name="subcategory">
                                        </div>

                                        <div class="col-md-3">
                                            <label for="validationCustom02" class="form-label">Select Brand</label><br>
                                            <input type="text" class="form-control" id="validationCustom01" value="<?= $product['brand'] ?>" name="brand">
                                        </div>

                                        <div class="col-md-3">
                                            <label for="validationCustom02" class="form-label">Select AgeGroup</label><br>
                                            <input type="text" class="form-control" id="validationCustom01" value="<?= $product['age'] ?>" name="age">
                                        </div>

                                        <div class="col-md-3 mb-4 mt-4">
                                            <label for="validationCustom01" class="form-label">MRP Price</label>
                                            <input type="number" class="form-control" id="validationCustom01" name="mrp" value="<?= $product['mrp'] ?>">
                                        </div>

                                        <div class="col-md-3 mb-4 mt-4">
                                            <label for="validationCustom02" class="form-label">offer</label><br>
                                            <input type="number" class="form-control" id="validationCustom01" name="offer" value="<?= $product['offer'] ?>">
                                        </div>

                                        <div class="col-md-3 mb-4 mt-4">
                                            <label for="validationCustom01" class="form-label">Quentity</label>
                                            <input type="number" class="form-control" id="validationCustom01" name="quentity" value="<?= $product['quentity'] ?>">
                                        </div>

                                        <div class="col-md-3 mb-4 mt-4">
                                            <label for="validationCustom01" class="form-label">Avibility</label>
                                            <input type="text" class="form-control" id="validationCustom01" value="In stock" name="avibility" value="<?= $product['avibility'] ?>">
                                        </div>


                                        <div class="col-md-12 mb-4 mt-4">
                                            <label for="exampleFormControlTextarea1" class="form-label">Short Information </label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="shortinfo" value="<?= $product['shortinfo'] ?>"><?= set_value('shortinfo') ?><?= $product['shortinfo'] ?></textarea>
                                        </div>

                                        


                                        <div class="col-md-6 mb-3 mt-3">
                                            <label for="validationCustom01" class="form-label">Picture</label>
                                            <br>
                                            <img src="<?= base_url('ProductImage/' . $product['pic1']) ?>" style="width: 50px;" alt="" srcset="">
                                            <input type="file" class="form-control" value="<?= $product['pic1'] ?>" id="validationCustom01" name="pic1">
                                        </div>
                                        <div class="col-md-6 mb-3 mt-3">
                                            <label for="validationCustom01" class="form-label">Picture</label>
                                            <br>
                                            <img src="<?= base_url('ProductImage/' . $product['pic2']) ?>" style="width: 50px;" alt="" srcset="">
                                            <input type="file" class="form-control" id="validationCustom01" name="pic2">
                                        </div>
                                        <div class="col-md-6 mb-3 mt-3">
                                            <label for="validationCustom01" class="form-label">Picture</label>
                                            <br>
                                            <img src="<?= base_url('ProductImage/' . $product['pic3']) ?>" style="width: 50px;" alt="" srcset="">
                                            <input type="file" class="form-control" id="validationCustom01" name="pic3">
                                        </div>
                                        <div class="col-md-6 mb-3 mt-3">
                                            <label for="validationCustom01" class="form-label">Picture</label>
                                            <br>
                                            <img src="<?= base_url('ProductImage/' . $product['pic4']) ?>" style="width: 50px;" alt="" srcset="">
                                            <input type="file" class="form-control" id="validationCustom01" name="pic4">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
                        CKEDITOR.replace( 'ckeditor' );
                </script>
</body>
<!-- main body -->


<!-- main Content  -->



<!-- main content end     -->



<!-- end body -->