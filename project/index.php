<?php 
    include('functions/userfunctions.php');
    include('includes/header.php');
    include('includes/slider.php');
?>

<div class="py-5 bg-f2f2f2 ">
    <div class="container" >
        <div class="row">
            <div class="cold-md-12">
                <h4> Trending</h4>
                <div class="underline mb-2"></div>
                    <div class="owl-carousel">
                    
                        <?php
                            $trendingProducts = getAllTrending();
                            if(mysqli_num_rows($trendingProducts)>0)
                            {
                                foreach($trendingProducts as $item)
                                {
                                    ?>
                                    <div class="card">
                                        <a href="product-view.php?product=<?=$item['slug'];?>">
                                            <div class="card shadow">
                                            <img class="card-img-top img-thumbnail" src="uploads/<?=$item['image'];?>" alt="Product Image ">
                                                <div class="card-body "style="width: 18rem;">
                                                    <h6 class="card-title text-center"><?=$item['name']; ?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    
                                <?php
                                }
                            }
                            
                        ?>
                            <div class="card" style="width: 18rem;">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            
                                        </div>
                                    </div> 
                    </div>             
            </div>
        </div>
    </div>
</div>
    
<div class="py-5 bg-f2f2f2">
    <div class="container" >
        <div class="row">
            <div class="cold-md-12">
                <h4>About us</h4>
                <div class="underline mb-2"></div>
                <p>
                Chúng tôi là trang web chuyên về rau rừng thức ăn healthy.
                <br>
                Với những sản phẩm tươi ngon và chất lượng cao từ rau rừng tự nhiên, chúng tôi cam kết đem đến cho bạn những lợi ích dinh dưỡng tuyệt vời. 
                <br>
                Chúng tôi đặt lợi ích sức khỏe của bạn lên hàng đầu và cam kết cung cấp những sản phẩm hữu cơ và bền vững. 
                <br>
                Tham gia với chúng tôi để khám phá một lối sống healthy và trải nghiệm sự khác biệt mà rau rừng thức ăn có thể mang lại cho bạn
                </p>
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
                <a href="about.php" class="text-white"><i class="fa fa-angle-right"></i> About us</a><br>
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
