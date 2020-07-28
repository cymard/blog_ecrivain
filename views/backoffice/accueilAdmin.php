<?php $title = 'accueil Admin'; ?>
<?php $other = ''; ?>
<?php ob_start(); ?>

<h2>Bienvenu Admin</h2>



<?php $content = ob_get_clean(); ?>

<?php require 'views\templateFront.php'; ?>