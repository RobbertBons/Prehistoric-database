<?php
require_once ('partials/header.php');
require_once ('classes/user.php');

$user = new User();

if(isset($_POST['login'])){
	echo $user->login($_POST);
}
session_start();
if(isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']){
	header("Location: ./index.php");
}


?>
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <main>
    	<section class="form">
	    	<form method="post">
	    		<label for="username" id="username">username: </label>
	    		<input type="text" name="username" required><!-- admin -->
	    		<label for="password">password: </label>
	    		<input type="password" name="password" required>
	    		<input type="submit" name="login" value="Login">
	    	</form>

			<article class="button">
				<a href="registratie.php">Registreren</a>
			</article>
	    
    	</section>
    </main>


<?php
require_once 'partials/footer.php';
?>

<style>
	body{
		overflow-y: scroll;
	}
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