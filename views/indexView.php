<?php $title = 'Accueil'; ?>

<?php $other = ''; ?>


<?php ob_start(); ?>


    <?php foreach($data as $value){ ?>

        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title text-uppercase"><?php echo $value->getTitle();?></h3>
                <p class="card-text "><?php echo $value->getContent(); ?></p>
                <a href="http://localhost/blog_ecrivain/article/<?php echo $value->getId();?>" class="btn btn-success">Lire l'article</a>
            </div>
            <div class="card-footer text-muted">
               <?php echo 'publié le '.$value->getDate();?>
            </div>
        </div>


    <?php } ?>



<?php $content = ob_get_clean(); ?>

<?php require 'templateFront.php'; ?>





