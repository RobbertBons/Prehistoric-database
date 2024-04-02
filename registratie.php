<?php
require_once ('partials/header.php');
require_once ('classes/user.php');

$user = new User();

if(isset($_POST['register'])){
	echo $user->create($_POST);
}

?>
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <main>
    	<section class="form">
	    	<form method="post">
	    		<label for="username" id="username">Username: </label>
	    		<input type="text" name="username" required>
				<label for="firstname" id="username">Name:</label>
        		<input type="text" name="firstname" required>
				<label for="lastname" id="lastname">Lastname:</label>
				<input type="text" name="lastname" required>
	    		<label for="password">Password: </label>
	    		<input type="password" name="password" required>
	    		<label for="conf-password">Password Confirm: </label>
	    		<input type="password" name="conf-password" required>
	    		<input type="submit" name="register" value="Register">
	    	</form>
    	</section>
    </main>


<?php
require_once 'partials/footer.php';
?>
