<?php

if(isset($_POST['submit'])){
 
    require_once ("classes/user.php");
    $gebruiker = new User();
    session_start();
    if($gebruiker->login($_POST) == "valid"){
        $_SESSION['ingelogd'] = true;
        header("Location: index.php");
    }else{
        $melding = "login gegevens incorrect";
    }
}

// require_once ('partials/header.php');
// require_once ('classes/user.php');

// $user = new User();

// if(isset($_POST['login'])){
// 	echo $user->login($_POST);
// }
// session_start();
// if(isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']){
// 	header("Location: ./index.php");
// }


?>

    <main>
    	<section class="form">
	    	<form method="post" action="">
	    		<label for="username" id="username">username: </label>
	    		<input type="text" name="username" required><!-- test -->
	    		<label for="password">password: </label>
	    		<input type="password" name="password" required><!-- test -->
	    		<input type="submit" name="submit" value="Login">
	    	</form>
	    	<a href="registratie.php">Registreren</a>
    	</section>
    </main>


<?php
require_once 'partials/footer.php';
?>