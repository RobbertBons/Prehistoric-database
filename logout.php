<?php
require_once 'partials/header.php';
require_once 'classes/user.php';
$gebruiker = new User();

$gebruiker->logout();
?>

<?php
require_once 'partials/footer.php';
?>