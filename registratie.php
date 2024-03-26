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
	    		<label for="username" id="username">Gebruikersnaam: </label>
	    		<input type="text" name="username" required>
        		voornaam:<input type="text" name="firstname">
				achternaam:<input type="text" name="lastname">
	    		<label for="password">Wachtwoord: </label>
	    		<input type="password" name="password" required>
	    		<label for="conf-password">Wachtwoord bevestiging: </label>
	    		<input type="password" name="conf-password" required>
	    		<input type="submit" name="register" value="Register">
	    	</form>
    	</section>
    </main>


<?php
require_once 'partials/footer.php';
?>
<style>
	.button {
		display: inline-block;
		padding: 10px 20px;
		background-color:  #fed684; 
		color: white;
		text-align: center;
		text-decoration: none;
		font-size: 16px;
		border-radius: 5px;
		border: none;
		cursor: pointer;
		transition: background-color 0.3s;
	}

	.button:hover {
		background-color: #5d7f5d; 
		}
</style>