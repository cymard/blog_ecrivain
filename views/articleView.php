<?php 
$title = 'Accueil'; 
?>

<?php $other = ''; ?>


<?php ob_start(); ?>

<?php 
while($result = $req->fetch()){
?>
    <?php $article->hydrate($result); //hydratation des variables de la class Article, on a: $article->getTitle() qui renvoie directement tous les titres alors que $result['title'] renvoie un titre à la fois ?>

    <p><strong><?php echo $result['title']; // echo $article->getTitle();?></strong></p>
    <p><?php echo $result['content']; ?></p>

    

<?php } ?>


<?php $content = ob_get_clean(); ?>

<?php require '../template.php';





