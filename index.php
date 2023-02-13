<?php 
include('./includes/head.php');
include('./includes/header.php');


?>

<!-- home-section starts -->
<section id="home" class="home">
    <div class="content">
        <h2>Des services sur mesure</h2>
        <a href="https://discord.gg/WNn6ZaUPTY" class="btn" target="_blanck"><i class="fa-brands fa-discord"></i> Discord</a> 
        <a href="https://toreya.pleven-dev.fr/#services" class="btn"><i class="fa-solid fa-circle-info"></i> En savoir plus </a>
    </div>
    <div class="video-container">
        <video src="images/background.mp4" id="video-slider" loop autoplay muted></video>
    </div>
</section>
<!-- home-section ends -->

<!-- package section starts -->
    <section class="container package" id="services">
        <div class="section-heading">
            <h2 class="heading">Services</h2>
        </div>

        <div class="box-container">
            <!-- first row -->

            <?php
            $servicesapi = 'includes/services.json';
            $jsonservices = file_get_contents($servicesapi);
            $servicesdecode = json_decode($jsonservices);
            foreach ($servicesdecode->retour as $je) { ?>
            <a href="./services?id=<?php echo "$je->id"; ?>">
            <div class="box">
                <img src="<?php echo "$je->img_url"; ?>" alt="<?php echo "$je->nom"; ?>">
                <div class="content">
                    <h4><?php echo "$je->nom"; ?></h4>
                    <div class="price"><?php echo "$je->prix"; ?></div>
               </div>
            </div>
            </a>
            <?php } ?>
        </div>
    </section>
<!-- package section ends -->

<!-- review section starts -->
<section class="review" id="review">
    <div class="section-heading">
            <h2 class="heading">Reviews</h2>
    </div>
    <div class="container">
        <div class="carousel owl-carousel">
            <?php 
            
            
            $reviewapi = 'includes/review.json';
            $jsonreview = file_get_contents($reviewapi);
            $decodereview = json_decode($jsonreview);
            
            foreach ($decodereview->retour as $je) { ?>
            <div class="card">            
                <div class="box">
  
                    <div class="review-content">
                        <h4><?php echo "$je->nom"; ?></h4>
                        <p style="overflow: hidden;"><?php echo "$je->description"; ?></p>
                    </div>
                    <div class="stars">
                        <i class="fas fa-star"> <?php echo "$je->etoiles"; ?></i> 
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
        </div>
</section>
<!-- review section ends -->
<?php include('./includes/footer.php'); ?>