<?php $title = 'post'; ?>

<?php $other = ''; ?>

<?php ob_start(); ?>



<div class="card">
    <div class="card-body">
        <h3 class="card-title text-uppercase text-center"><?php echo $hydratedArticle->getTitle();?></h3>
        <p class="card-text "><?php echo $hydratedArticle->getContent(); ?></p>
    </div>
    <div class="card-footer text-muted text-center">
        <?php echo 'dernière publication le '.$hydratedArticle->getDate();?>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require 'templateFront.php'; ?>