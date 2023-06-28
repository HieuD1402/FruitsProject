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
                <h4> Categories</h4>
                </div>
                <div class="card-body" id="category_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $category = getAll("categories");
                                if(mysqli_num_rows($category)>0){
                                    foreach ($category as $item) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?=$item['id']; ?></td>
                                                <td><?=$item['name']; ?></td>
                                                <td>
                                                    <img src="../uploads/<?= $item['image']; ?>" 
                                                    width="50px" alt="<?= $item['name']; ?>">
                                                </td>
                                                <td>
                                                    <?= $item['status']=='0' ? "Visible":"Hidden"?>
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
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4> Products</h4>
                </div>
                <div class="card-body" id="products_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th >Name</th>
                                <th>Image</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $products = getAll("products");
                                if(mysqli_num_rows($products)>0){
                                    foreach ($products as $item) {
                                        ?>
                                            <tr>
                                                <td class="text-center"><?=$item['id']; ?></td>
                                                <td><?=$item['name']; ?></td>
                                                <td>
                                                    <img src="../uploads/<?= $item['image']; ?>" 
                                                    width="50px" alt="<?= $item['name']; ?>">
                                                </td>
                                                <td>
                                                    <?= $item['status']=='0' ? "Visible":"Hidden"?>
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





<?php include('includes/footer.php');?>

