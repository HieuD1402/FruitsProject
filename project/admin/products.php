<?php
    include('includes/header.php');
    include('../middleware/adminMiddleware.php');
    include('../config/dbcon.php');
    
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4> Products</h4>
                </div>

                <!-- <table id="example" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Row 1 Data 1</td>
                            <td>Row 1 Data 2</td>
                        </tr>
                        <tr>
                            <td>Row 2 Data 1</td>
                            <td>Row 2 Data 2</td>
                        </tr>
                    </tbody>
                </table> -->


                <div class="card-body" id="products_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $products = getAll("products");
                                if(mysqli_num_rows($products)>0){
                                    foreach ($products as $item) {
                                        ?>
                                            <tr>
                                                <td><?=$item['id']; ?></td>
                                                <td><?=$item['name']; ?></td>
                                                <td>
                                                    <img src="../uploads/<?= $item['image']; ?>" 
                                                    width="50px" alt="<?= $item['name']; ?>">
                                                </td>
                                                <td>
                                                    <?= $item['status']=='0' ? "Visible":"Hidden"?>
                                                </td>
                                                <td >
                                                    <div class="d-flex justify-content-center">
                                                        <a href="edit-product.php?id= <?=$item['id']; ?>" 
                                                        class="btn btn-secondary  btn-sm ">edit</a>
                                                    </div>
                                                    
                                                </td>
                                                <td >
                                                    <button tyle="button" class="btn btn-danger btn-sm delete_product_btn"
                                                    value="<?=$item['id'];?>" name="delete_product_btn" > 
                                                    Delete</button>
                                                </td>
                                            </tr>
                                        <?php
                                        
                                    }
                                }
                            ?>


                            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>   
    </div>
</div>
<?php include('includes/footer.php'); ?>
