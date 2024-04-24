<?php
require_once ('partials/header.php');

if(isset($_POST['submit'])){
 
    require_once ("classes/user.php");
    $gebruiker = new User();
	
    if($gebruiker->login($_POST) == "valid"){
        $_SESSION['ingelogd'] = true;
        header("Location: index.php");
    }else{
        $melding = "login gegevens incorrect";
    }
}
?>
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <main>
    	<section class="form">
	    	<form method="post" action="">
	    		<label for="username" id="username">username: </label>
	    		<input type="text" name="username" required><!-- test -->
	    		<label for="password">password: </label>
	    		<input type="password" name="password" required><!-- test -->
	    		<input type="submit" name="submit" value="Login">
	    	</form>
			<br>
			<article class="button">
				<a href="registratie.php">Registreren</a>
			</article>
	    
    	</section>
    </main>


<?php
require_once 'partials/footer.php';
?>

