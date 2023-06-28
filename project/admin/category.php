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
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $category = getAll("categories");
                                if(mysqli_num_rows($category)>0){
                                    foreach ($category as $item) {
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
                                                <td>
                                                    <a href="edit-category.php?id= <?=$item['id']; ?>" 
                                                    class="btn btn-secondary ">edit</a>
                                                    <!-- <form action="code.php" method="POST">
                                                        <input type="hidden" name="category_id" value="">
                                                        <button tyle="submit" name="delete_category_btn" class="btn btn-primary">Delete</button>
                                                    </form> -->
                                                    <button tyle="button" class="btn btn-danger btn-sm delete_category_btn"
                                                    value="<?=$item['id'];?>" name="delete_category_btn" > 
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
