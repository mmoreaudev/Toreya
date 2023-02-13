<title>Service - Toreya | Développement</title>
<?php 
include('./includes/head.php');
include('./includes/header.php');
include('./includes/db.php');

if(isset($_GET['id'])){
    if (!empty($_GET['id'])) {

    $id = $_GET['id'];
    $reqservice = $pdo->prepare("SELECT * FROM services WHERE id=$id");
    $reqservice->execute();
    $row = $reqservice->fetch();
    if (!empty($row['nom'])) {
    ?>
        <section class="service" id="service">
            <div class="section-heading">

                <h2 class="heading"><?php echo  $row['nom']; ?></h2>
            </div>

            <div class="service-box">
                <div class="box">
                    <div class="content">
                    <i class="fa-brands fa-discord"></i>
                        <h4>Discord</h4>
                        <p>Pour commander un service vous devez, rejoindre notre <a href="https://discord.gg/4hc6v5us9y" target="_blanck">Discord</a> et ouvrir un ticket dans le salon </br><a href="https://discord.com/channels/977873015272525946/978005771499499580" target="_blanck"><code>#📓|commander</code></a>.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                    <i class="fa-solid fa-gears"></i>
                        <h4><?php echo  $row['nom']; ?></h4>
                        <p><?php echo  $row['description']; ?></p>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                    <i class="fa-solid fa-at"></i>
                        <h4>E-Mail</h4>
                        <p>Pour commander un service vous pouvez aussi, nous contactez par e-mail, à l'adresse suivant, <a href="mailto:contact@toreya.fr?subject=Commande%20du%20service:%20<?php echo  $row['nom']; ?>" target="_blanck">contact@toreya.fr</a> et décrivez-nous votre demande dans les moindres détails.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery" id="gallery">
        <div class="section-heading">
            <h2 class="heading">Exemples</h2>
         </div>
        <div class="gallery-box">
            <div class="box">
                <img src="<?php echo  $row['img1']; ?>" alt="card-image1">
            </div>
            <div class="box">
                <img src="<?php echo  $row['img2']; ?>" alt="card-image1">
            </div>
            <div class="box">
                <img src="<?php echo  $row['img3']; ?>" alt="card-image1">
            </div>
        </div>
    </section>
<?php } else {
    header('Location:https://toreya.pleven-dev.fr/');
} } else {
    header('Location:https://toreya.pleven-dev.fr/');
} } else {
    header('Location:https://toreya.pleven-dev.fr/');
}
?>


<!-- review section ends -->
<?php include('./includes/footer.php'); ?>