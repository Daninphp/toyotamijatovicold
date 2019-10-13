<?php
include('modules/header.php');
require_once('data/dbconn.php');
require_once('data/readauto.php');
?>

<div class="container car-parts">
    <div class="row">
        <div class="col-md-6">
            <p>Za navedene modele automobila posedujemo sledece delove:</p>
            <ul>
                <li>Limarija</li>
                <li>Mehanika</li>
                <li>Elektrika</li>
                <li>Enterijer</li>
                <li>Air begovi</li>
                <li>Menjac</li>
                <li>Motor</li>
                <li>I jos dosta drugih delova</li>
            </ul>
        </div>
        <div class="col-md-6">
           <p>Vrsimo i sledece usluge</p>
            <ul>
                <li>Ugradnja delova</li>
                <li>Garancija na ispravnost delova</li>
                <li>Slanje delova brzom postom</li>
            </ul>
        </div>

    </div>
    <!-- Load cars and details from DB -->
    <?php
        while ($row = $q->fetch()) {
    ?>

    <div class="row mb-4">
        <div class="col-md-6">
            <img src="<?=  htmlspecialchars($row['image']) ?>" class="img-fluid" alt="Aygo 2006 godiste">
        </div>
        <div class="col-md-6 about">
            <p><?= htmlspecialchars($row['description']); ?></p>
        </div>
    </div>

    <?php
        }
    ?>

</div>

<?php
include('modules/footer.php');
?>