<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Toyota Mijatovic</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/png" href="img/icon.png">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

	<script src="https://kit.fontawesome.com/30e0b3d7dd.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/md5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfM77oUAAAAAFvB8rJhIo-KL4fSQc4NraY1zbjh"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LfM77oUAAAAAFvB8rJhIo-KL4fSQc4NraY1zbjh', { action: 'contact' })
                .then(function (token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    console.log(recaptchaResponse)
                    recaptchaResponse.value = token;
                });
        });
    </script>
</head>
<body>
<div class="container-fluid navigation-cont">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light  nav-cont">
                    <a class="navbar-brand" href="index.php">Logo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navigation" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#automobili">Delovi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#slide-show">Galerija</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#map">Kontakt</a>
                            </li>
                            <li class="nav-item">
								<?php
								if(isset($_SESSION['username'])){ ?>
                                    <a class="nav-link" style="color: #b33939;" href="data/logout.php">Log Out</a>
								<?php } ?>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </div>

</div>