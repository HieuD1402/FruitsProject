<?php 

    include('includes/header.php');
    include('../middleware/adminMiddleware.php');  
?>




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add product</h4>
                    
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">

                        <div class="col-md-12">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter category name" class="form-control">
                        </div>

                        <div class="col-md-6">
                            
                            <label for="">Select category</label>
                            <select name="category_id" class="form-select" >
                                <option selected>Select category</option>
                                <?php 
                                    $categories = getAll("categories");
                                    if(mysqli_num_rows($categories)>0)
                                    {
                                        foreach ($categories as $item) {
                                            ?>
                                                <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No category available";
                                    }
                                ?>
                                
                                
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">Slug</label>
                            <input type="text" name="slug" placeholder="Enter slug" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="">Small Description</label>
                            <textarea rows="3" name="small_description" placeholder="Enter small description" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="">Description</label>
                            <textarea rows="3" name="description" placeholder="Enter description" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="">Original price</label>
                            <input type="text" name="original_price" placeholder="Enter original price" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="">Selling price</label>
                            <input type="text" name="selling_price" placeholder="Enter selling price" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="">Quantity</label>
                                <input type="number" name="qty" placeholder="Enter quantity" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="mb-2">Status</label></br>
                                <input type="checkbox" name="status" >
                            </div>

                            <div class="col-md-3">
                                <label class="mb-2">Trending</label></br>
                                <input type="checkbox" name="trending" >
                            </div>
                        </div>

                        <!-- <div class="col-md-12">
                            <label for="">Meta title</label>
                            <input type="text" name="meta_title" placeholder="Enter meta title" class="form-control">
                        </div>

                        <div class="col-md-12">
                            <label for="">Meta description</label>
                            <textarea rows="3" name="meta_description" placeholder="Enter meta description" class="form-control"></textarea>
                        </div> -->

                        <div class="col-md-12">
                            <label class="mb-2">Meta keywords</label>
                            <textarea rows="3" name="meta_keywords" placeholder="Enter meta keywords" class="form-control mb-2"></textarea>
                        </div>

                        <div class="col-md-12 mb-2">
                            <button tyle="submit" class="btn btn-primary" name="add_product_btn"> Save</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php');?>

