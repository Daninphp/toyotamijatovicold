<?php
include('modules/header.php');
require_once('data/loadinsert.php');
?>
<script>
    $(document).ready(function () {
        $('#cars').change(function () {
            var cId = $('#cars').val();
            $.ajax({
                url: 'data/loadinsert.php',
                method: 'post',
                data: 'cId=' + cId
            }).done(function (years) {
                years = JSON.parse(years);
                $('#years').empty();
                years.forEach(function (year) {
                    $('#years').append('<option>' + year.model_range + '</option>')
                })
            })
        })
    })
</script>
<section class="fluid">
    <div class="row">
        <div class="col-sm-6">
            <form action="">
                <label for="cars">cars</label>
                <select name="cars" id="cars">
                    <option selected disabled>Select car model</option>
                    <?php
                    $cars = loadCars();
                    while ($row = $cars->fetch()) {
                    ?>
                        <option id="<?=  htmlspecialchars($row['name']) ?>" value="<?=  htmlspecialchars($row['name']) ?>"><?=  htmlspecialchars($row['name']) ?></option>
                    <?php
                    }
                    ?>
                </select>

                <label for="years">Years</label>
                <select name="years" id="years">
                    <option>Model range</option>
                </select>

            </form>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
</section>



<?php
include('modules/footer.php');