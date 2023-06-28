<?php 
    include('functions/userfunctions.php');
    include('includes/header.php');
    include('includes/slider.php');
?>

<div class="py-5 ">
    <div class="container" >
        <div class="row">
            <div class="cold-md-12">
            <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 d-flex justify-content-center align-items-center" style="background-image: url(images/about22.jpg);">
					
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Welcome to Vegefoods an eCommerce website</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
	          	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<p>But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
							<p><a href="#" class="btn btn-primary">Shop now</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		
		
		
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
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16">
  <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"/>
</svg>