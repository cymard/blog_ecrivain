<?php $title = 'Accueil'; ?>

<?php $other = ''; ?>


<?php ob_start(); ?>


    <?php foreach($data as $value){ ?>

        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title text-uppercase "><?php echo $value->getTitle();?></h3>
                <p class="card-text"><?php 
                
                echo substr($value->getContent(),0,600); // on coupe le contenu à 600 caractères
                
                if(strlen($value->getContent()) > 600){ // si le contenu est supérieur à 600 caractères alors on affiche '...'
                    echo "...";
                }
                
                ?></p>
                <a href="http://localhost/blog_ecrivain/article/<?php echo $value->getId();?>" class="btn btn-success">Lire l'article</a>
            </div>
            <div class="card-footer text-muted">
               <?php echo 'dernière publication le '.$value->getDate();?>
            </div>
        </div>

    <?php } ?>


<?php $content = ob_get_clean(); ?>

<?php require 'templateFront.php'; ?>





