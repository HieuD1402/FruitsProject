<?php 

    include('includes/header.php');
    include('../middleware/adminMiddleware.php');  
?>




<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];

                    $product = getByID("products",$id);

                    if(mysqli_num_rows($product)>0)
                    {
                        $data = mysqli_fetch_array($product);

                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit product</h4>
                                <a href="products.php" class="btn btn-primary float-end">Back </a>
                                
                            </div>
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                        
                                        <div class="col-md-12">
                                            <label for="">Name</label>
                                            <input type="text" name="name" value="<?=$data['name'];?>"  placeholder="Enter category name" class="form-control">
                                        </div>
                                        <input type="hidden" name="product_id" value="<?=$data['id'];?>" >
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
                                                                <option value="<?= $item['id']; ?>"<?=$data['category_id']==$item['id']
                                                                ?'selected':''?>><?= $item['name']; ?></option>
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
                                            <input type="text" name="slug" value="<?=$data['slug'];?>" placeholder="Enter slug" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Small Description</label>
                                            <textarea rows="3" name="small_description" placeholder="Enter small description" class="form-control"><?=$data['small_description'];?></textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Description</label>
                                            <textarea rows="3" name="description" placeholder="Enter description" class="form-control"><?=$data['description'];?></textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Original price</label>
                                            <input type="text" name="original_price" value="<?=$data['original_price'];?>" placeholder="Enter original price" class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="">Selling price</label>
                                            <input type="text" name="selling_price" value="<?=$data['selling_price'];?>" placeholder="Enter selling price" class="form-control">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="">Image</label>
                                            <input type="hidden" name="old_image" value="<?= $data['image'];?>">
                                            <input type="file"  name="image" class="form-control">
                                            <label for="">Current Image</label>
                                            <img src="../uploads/<?=$data['image'];?>" alt="Product Image" height="50" width="50">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <label for="">Quantity</label>
                                                <input type="number" required name="qty"  value="<?=$data['qty'];?>" placeholder="Enter quantity" class="form-control">
                                                
                                            </div>

                                            <div class="col-md-3">
                                                <label class="mb-2">Status</label></br>
                                                <input type="checkbox" name="status" <?=$data['status']== '0'?"":"checked" ?>>
                                            </div>

                                            <div class="col-md-3">
                                                <label class="mb-2">Trending</label></br>
                                                <input type="checkbox" name="trending" <?=$data['trending']== '0'?"":"checked" ?>>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-12">
                                            <label for="">Meta title</label>
                                            <input type="text" required name="meta_title" value="<?=$data['meta_title'];?>" placeholder="Enter meta title" class="form-control">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="">Meta description</label>
                                            <textarea rows="3" required name="meta_description" placeholder="Enter meta description" class="form-control"><?=$data['meta_description'];?></textarea>
                                        </div> -->

                                        <div class="col-md-12">
                                            <label class="mb-2">Meta keywords</label>
                                            <textarea rows="3" required name="meta_keywords" placeholder="Enter meta keywords" class="form-control mb-2"><?=$data['meta_keywords'];?></textarea>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <button tyle="submit" class="btn btn-primary" name="update_product_btn"> Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                    }
                    else
                    {
                        echo"Product not found";
                    }         
                }
                else
                    {
                        echo"Id missing from url ";
                    }   
            ?>
        </div>
    </div>
</div>



<?php include('includes/footer.php');?>

