<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toyzee | Online toy shop in India</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

        .containerss {
            position: relative;
        }


        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid bg-danger">
        <div class="row">
            <div class="col-md-6 text-white">
                <span><i class="bi bi-telephone-fill"></i> +1 234 5678 9</span>
                <span> |<i class="bi bi-envelope-fill mx-3"></i> Email Id:sales@kscpl.co.in</span>
            </div>
            <div class="col-md-6 float-end">
                <span><a href="" class="text-white mx-3"> <i class="bi bi-box-arrow-in-right"></i> My Account |</a></span>
                <span><a href="" class="text-white mx-3"> <i class="bi bi-box-arrow-in-right"></i> My WishList |</a></span>
                <span><a href="" class="text-white mx-3"> <i class="bi bi-box-arrow-in-right"></i> Checkout |</a></span>
                <span><a href="<?= base_url() ?>AdminLogin" class="text-white mx-3"> <i class="bi bi-box-arrow-in-right"></i> Login </a></span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-light p-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="mainassets/logo.png" class="text-danger fs-2 fw-bold" alt="TOYZee" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <a href="<?= base_url(); ?>" class="nav-link active fs-5" aria-current="page" href="#">Category</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url() ?>ProductList" class="nav-link active fs-5" aria-current="page" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#">Contact US</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline-danger" type="submit"><i class="bi bi-cart-fill"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-5">
                <div class="container containerss">
                    <div class="mySlides">
                        <div class="numbertext">1 / 6</div>
                        <img src="<?= base_url('ProductImage/' . $product['pic1']) ?>" style="height:350px; width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 6</div>
                        <img src="<?= base_url('ProductImage/' . $product['pic2']) ?>" style="height:350px; width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 6</div>
                        <img src="<?= base_url('ProductImage/' . $product['pic3']) ?>" style="height:350px; width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 6</div>
                        <img src="<?= base_url('ProductImage/' . $product['pic4']) ?>" style="height:350px; width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    <div class="caption-container">
                        <p id="caption"></p>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <img style='width:100px;' class="demo cursor" src="<?= base_url('ProductImage/' . $product['pic1']) ?>" style="width:100%" onclick="currentSlide(1)">
                        </div>
                        <div class="col-md-3">
                            <img style='width:100px;' class="demo cursor" src="<?= base_url('ProductImage/' . $product['pic2']) ?>" style="width:100%" onclick="currentSlide(2)">
                        </div>
                        <div class="col-md-3">
                            <img style='width:100px;' class="demo cursor" src="<?= base_url('ProductImage/' . $product['pic3']) ?>" style="width:100%" onclick="currentSlide(3)">
                        </div>
                        <div class="col-md-3">
                            <img style='width:100px;' class="demo cursor" src="<?= base_url('ProductImage/' . $product['pic4']) ?>" style="width:100%" onclick="currentSlide(4)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="" method="post">
                    <p class="text-dark fs-3 fw-bolder" id="Productname"><?= $product['product'] ?></p>
                    <p class="text-dark  fw-bold">MRP <?= $product['mrp'] ?> inc. all taxes</p>
                    <p class="text-dark  "><span class="fs-5 fw-bold text-danger">Offer : <?= $product['disscount'] ?></span> <span> <?= $product['offer'] ?>% disscount </span></p>
                    <p>Product code: - <?= $product['specification'] ?></p>
                    <p>Availability:-<?= $product['quentity'] ?></p>
                    <p class="text-success"> <?= $product['avibility'] ?> </p>
                    <p>
                        <?php
                        $sum = $product['delivery'] + 3;

                        echo "delivery on  <span class='fw-bold'> " . $product['delivery'] . " to " . $sum . " business days </span> ";

                        ?>
                    </p>
                    <a href="" class="btn btn-outline-danger mt-2 mb-5">Add Cart</a>
                    <p>
                        Product Information:- <?= $product['shortinfo'] ?>

                    </p>


                </form>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center bg-white p-3 m-5 one">
            <div class="col-md-10 mt-5 mx-5 p-3 border border-dark rounded-2">
                <p>Additional Product Information:- </p>
                <?= $product['ckeditor'] ?>
            </div>
        </div>

    </div>



    <div class="container-fluid bg-danger">
        <div class="row text-white">
            <div class="col-md-3 p-5">
                <span class="fs-5"><i class="bi bi-truck"></i> Free shipping</span>
            </div>
            <div class="col-md-3 p-5">
                <span class="fs-5"><i class="bi bi-gift"></i> Online Payment</span>
            </div>
            <div class="col-md-3 p-5">
                <span class="fs-5"><i class="bi bi-telephone-fill"></i> Give Us A Call</span>
            </div>
            <div class="col-md-3 p-5">
                <span class="fs-5"><i class="bi bi-emoji-smile-fill"></i> Customer Review</span>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
</body>

</html>