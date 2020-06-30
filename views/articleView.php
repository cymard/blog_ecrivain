<?php $title = 'Accueil'; ?>

<?php $other = ''; ?>


<?php ob_start(); ?>


    <?php for($i = 0;$i < count($result); $i++ ){?>


        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title text-uppercase"><?php echo $result[$i]['title'];?></h3>
                <p class="card-text "><?php echo $result[$i]['content']; ?></p>
                <a href="#" class="btn btn-success">Lire l'article</a>
            </div>
            <div class="card-footer text-muted">
               <?php echo 'publié le '.$result[$i]['date']?>
            </div>
        </div>


    <?php } ?>



<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>





