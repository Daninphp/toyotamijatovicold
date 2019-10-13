<?php
include('modules/header.php');
require_once('data/read.php');
?>

    <div class="container-fluid hero-text">
        <div class="short-info">
            <?php if(isset($_GET['message']))
                echo "Poruka je uspesno prosledjena!";
            ?>
            <h1>Auto centar Toyota Mijatovic</h1>
            <h2>Servis i delovi</h2>
            <p><a href="tel:0631689850">0631689850</a></p>
            <p><a href="tel:0628310391">0628310391</a></p>
            <p><a href="mailto:0631689850">markomilic582@gmail.com</a></p>
            <p>Mostanicka bb, Sremcica, Beograd</p>
        </div>
    </div>

    <section class="container services">
        <div class="row">
            <div class="col">
                <h2>Usluge koje pruzamo</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center usluge">
                <h3>Servis i odrzavanje vozila</h3>
                <p><i class="fas fa-wrench icon"></i></p>
            </div>
            <div class="col-md-4 text-center usluge">
                <h3>Originalna dijagnostika</h3>
                <p><i class="fas fa-stethoscope icon"></i></p>
            </div>
            <div class="col-md-4 text-center usluge">
                <h3>Polovni originalni delovi i ugradnja</h3>
                <p><i class="fas fa-box-open icon"></i></p>
            </div>

        </div>
        <div class="row mt-md-5">
            <div class="col-md-6 text-center usluge">
                <h3>Punjenje klima ukljcujuci vozila sa hibridnim pogonom</h3>
                <p><i class="fas fa-fan icon"></i></p>
            </div>
            <div class="col-md-6 text-center usluge">
                <h3>Otkup havarisanih i neispravnih Toyota vozila</h3>
                <p><i class="fas fa-car icon"></i></p>
            </div>
        </div>
    </section>
    <section class="slide-show container" id="slide-show">
        <div class="col-10 gallery">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                </ol>
                <div class="carousel-inner">

                    <!-- Default starting/active div/image -->

                    <div class="carousel-item active">
                        <img src="img/servis8.jpg" class="img-fluid d-block w-100" alt="">
                    </div>

					<?php
					while ($row = $images->fetch()) {
					?>

                    <div class="carousel-item">
                        <img src="<?= htmlspecialchars($row['path']); ?>" class="img-fluid d-block w-100" alt="">
                    </div>

                    <?php
					}
					?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </section>
    <section class="container cars" id="automobili">
        <h3>Kompletni automobili u delovima od 2000 do 2018 god</h3>

        <div class="row row-1">
			<?php
			    while ($row = $models1->fetch()) {
            ?>
            <div class="col-sm-2 car-card">
                <a href="auto.php?id=<?= htmlspecialchars($row['name']); ?>">
                    <img src="<?= htmlspecialchars($row['image']); ?>" class="img-fluid car-pic" alt="Verso">
                    <p class="name"><?= htmlspecialchars($row['name']); ?></p>
                </a>
            </div>
            <?php
			    }
			?>
        </div>

        <div class="row row-2">
			<?php
			    while ($row = $models2->fetch()) {
			?>
            <div class="col-sm-2 car-card">
                <a href="auto.php?id=<?= htmlspecialchars($row['name']); ?>">
                    <img src="<?= htmlspecialchars($row['image']); ?>" class="img-fluid car-pic" alt="Verso">
                    <p class="name"><?= htmlspecialchars($row['name']); ?></p>
                </a>
            </div>
            <?php
			    }
			?>
            <div class="col-lg car-card">
                <a href="#"><!-- Left empty because of bootstrap(5 divs) --></a>
            </div>
        </div>
    </section>


    <section class="container map" id="map">
        <div class="row">

            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2836.488093646517!2d20.371675000000003!3d44.689233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDQxJzIxLjIiTiAyMMKwMjInMTguMCJF!5e0!3m2!1sen!2srs!4v1569671169484!5m2!1sen!2srs" height="300" frameborder="0" style="border:0;" allowfullscreen="" class="google-map"></iframe>
            </div>
            <div class="col-md-4 form form-map">
                <form action="data/sendemail.php" method="POST" id="forma1">
                    <div class="form-group row">
                        <label for="ime" class="col-sm-2 col-form-label">Ime</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ime" name="ime" placeholder="Vase ime..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ime" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Vas email..">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="poruka" class="col-sm-2 col-form-label">Poruka</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="poruka" name="poruka" rows="6" placeholder="Vasa poruka.."></textarea>
                        </div>
                    </div>

                    <input type="hidden" value="" name="recaptcha_response" id="recaptchaResponse">

                    <div class="form-group row sub-row">
                        <button class="btn btn-send" type="submit">Posalji poruku</button>

                    </div>

                </form>
            </div>

        </div>
    </section>
<?php
include('modules/footer.php');
?>
