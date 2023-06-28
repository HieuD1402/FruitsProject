<?php 
    include('functions/userfunctions.php');
    include('includes/header.php');
    
?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-while">Home / Collection</h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Collection</h1>
                <hr>
                <div class="row ">
                    <?php 
                        $categories = getAllActive("categories");
                        if(mysqli_num_rows($categories)>0)
                        {
                            foreach($categories as $item ) 
                            {
                                ?>
                                    <div class="col-md-3 mb-2">
                                        <a href="products.php?category=<?=$item['slug']; ?>">                           
                                            <div class="card shadow">
                                                <div class="card-body ">
                                                    <img  src="uploads/<?=$item['image'];?>" alt="Category Image " 
                                                    class="w-100">
                                                    <h4 class="text-center "><?=$item['name']; ?></h4>
                                                </div>
                                            </div>
                                        </a>    
                                    </div>
                                <?php
                            }
                        }
                        else
                        {
                            echo "No data avilable";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h4 class="text-white">Fruist VN</h4>
                <div class="underline mb-2"></div>
                <a href="index.php" class="text-white"><i class="fa fa-angle-right"></i> Home</a><br>
                <a href="#" class="text-white"><i class="fa fa-angle-right"></i> About us</a><br>
                <a href="cart.php" class="text-white"><i class="fa fa-angle-right"></i> My Cart</a><br>
                <a href="categories.php" class="text-white"><i class="fa fa-angle-right"></i> Collection</a><br>
            </div>
            <div class="col-md-3">
                <h4 class="text-white">Address</h4>
                <div class="underline mb-2"></div>
                <p class="text-white"> 
                    tan thoi nhat, quan 12, TP HCM <br>
                    cach mang thang 8 quan 3 TP HCM <br>
                    quan trung quan go vap TP HCM
                </p>
                
                    <a href="tel:+9119006785" class="text-white"> <i class="fa fa-phone"></i> +91 19006785</a> <br>
                    <a href="mailto:fruistVN@gmail.com" class="text-white"> <i class="fa fa-phone"></i> fruistVN@gmail.com</a>
            </div>
            <div class="col-md-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1220125980003!2d106.64522147594252!3d10.80196605872027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752948437681eb%3A0xa168138bd1dc6944!2zQ-G7mW5nIEjDsmEgUGxhemE!5e0!3m2!1svi!2s!4v1685797865098!5m2!1svi!2s" class="w-100"  height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="py-2 bg-danger">
    <div class="text-center">
        <p class="mb-0 text-white">All rights reserved. Copyright @ FruistVN <?=date('Y')?> </p>
    </div>
</div>   

<?php include('includes/footer.php');?>
<script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    });
</script>

<style>
    .underline{
        height: 5px;
        width: 150px;
        background-color: red;
        border-radius: 20px;
    };
    .bg-f2f2f2{
        background-color: #f2f2f2;
    };
</style>