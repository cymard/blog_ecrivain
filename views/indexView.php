<?php $title = 'Accueil'; ?>


<?php $other = " "; ?>


<?php ob_start(); ?>


<!-- banniere     -->

    <div class="card text-white" style="width: 100%; border: 0px;">
        <img id="image-background" src="images/alaska001.jpg" alt="Alaska paysage montagne route"> 
        <div id="container-title" class="card-img-overlay text-center">
            <h1 id="title" class="card-title text-uppercase" style="text-shadow: 2px 2px 2px black;">Billet simple pour l'Alaska</h1>
            <p id="info"  class="card-text" >Votre roman publié par épisode & écrit par Jean Forteroche</p>
        </div>
    </div>

    

    <br>
    <br>

    <!-- articles -->
    <?php foreach($data as $value){ ?>

        <div class="card text-center" style="border-top : 0px;">
            <div class="card-body">
              <br>

                <h3 class="card-title text-uppercase "><?php echo $value->getTitle();?></h3>
                <p class="card-text"><?php 
                
                echo substr($value->getContent(),0,600); // on coupe le contenu à 600 caractères
                
                if(strlen($value->getContent()) > 600){ // si le contenu est supérieur à 600 caractères alors on affiche '...'
                    echo "...";
                }
                
                ?></p>
                <a href="http://localhost/blog_ecrivain/article/<?php echo $value->getId();?>" class="btn btn-primary">Lire l'article</a>
            </div>
            <div class="card-footer text-muted">
            <?php echo 'dernière publication le '.$value->getDate();?>
            </div>
        </div>

    <?php } ?>


<?php $content = ob_get_clean(); ?>

<?php require 'templateFront.php'; ?>





