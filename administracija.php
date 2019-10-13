<?php
include('modules/header.php');

?>


<form action="data/login.php" method="post">
	<input type="text" name="username" id="username"> <br>
	<input type="password" name="password" id="password"> <br>

	<input type="submit" value="Log In">
</form>



<?php
include('modules/footer.php');