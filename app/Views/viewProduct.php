<?= $this->extend("Admin/base");  ?>

<?= $this->section("mycontent") ?>

<!-- main body -->


<!-- main Content  -->

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="container bg-white">
                    <div class="row">
                        <div class="col-md-11">
                            <br>
                            <br>
                            <div class="table-responsive">

                                <table class="table" id="mydatatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product </th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Sub Category</th>
                                            <th scope="col">Braand</th>
                                            <th scope="col">MRP</th>
                                            <th scope="col">List Price</th>
                                            <th scope="col">Offer </th>
                                            <th scope="col">Quentity</th>
                                            <th scope="col">Avibility</th>
                                            <th scope="col">Picture </th>
                                            <th scope="col">Picture </th>
                                            <th scope="col">Picture </th>
                                            <th scope="col">Picture </th>
                                            <th>Action</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($product as $row) : ?>
                                            <tr>
                                                <td><?= $row['ID']; ?></td>
                                                <td><?= $row['product']; ?></td>
                                                <td><?= $row['category']; ?></td>
                                                <td><?= $row['subcategory']; ?></td>
                                                <td><?= $row['brand']; ?></td>
                                                <td><?= $row['mrp']; ?></td>
                                                <td><?= $row['disscount']; ?> </td>
                                                <td><?= $row['offer']; ?> % </td>
                                                <td><?= $row['quentity']; ?></td>
                                                <td><?= $row['avibility']; ?></td>
                                                <td>
                                                    <img src="ProductImage/<?= $row['pic1']; ?>" height="100px" width="100px" alt="<?= $row['pic1']; ?>" srcset="">
                                                </td>
                                                <td>
                                                    <img src="ProductImage/<?= $row['pic2']; ?>" height="100px" width="100px" alt="<?= $row['pic1']; ?>" srcset="">
                                                </td>
                                                <td>
                                                    <img src="ProductImage/<?= $row['pic3']; ?>" height="100px" width="100px" alt="<?= $row['pic1']; ?>" srcset="">
                                                </td>
                                                <td>
                                                    <img src="ProductImage/<?= $row['pic4']; ?>" height="100px" width="100px" alt="<?= $row['pic1']; ?>" srcset="">
                                                </td>
                                                
                                                
                                                <td>
                                                    <a href="<?= base_url('User/updateProduct/' . $row['ID']) ?>" class="btn btn-outline-success m-1">Edit</a>
                                                    <a href="<?= base_url('User/removeProduct/' . $row['ID']) ?>" class="btn btn-outline-danger m-1">Remove</a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('User/viewProduct/' . $row['ID']) ?>" class="btn btn-outline-success m-1">View</a>
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
</div>
<!-- main content end     -->



<!-- end body -->






<?= $this->endsection() ?>