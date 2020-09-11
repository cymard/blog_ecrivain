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




<div class="container p-4 border border-primary rounded bg-light" style="margin-top : 60px;">
    <form action="http://localhost/blog_ecrivain/poster/commentaire/article/<?php echo $hydratedArticle->getId(); ?>" method="POST">

        <div class="row">
            <label class="mr-3" for="username" >Nom : </label>
            <input class="border border-primary rounded col-12" type="text" id="username" name="username" placeholder="Votre nom...">
        </div>

        <div class="row">
            <label class="mr-3 mt-2" for="comment">Commentaire : </label>
            <textarea class="border border-primary rounded p-2" name="comment" id="comment" cols="200" rows="10" placeholder="Votre commentaire..."></textarea>
        </div>

        <div class="row">
            <input class="btn btn-primary mt-2 col-12" type="submit" value="Poster">
        </div>

    </form>
</div>


<h2 class="text-center" style="margin-top : 60px; margin-bottom : 40px;">Commentaires : </h2>
<br>


<div class="container ">
    <?php foreach($result as $value){ ?>
        
            <div class="card bg-light mb-3">
                <div class="card-header">
                    <div class="row">
                        <p class="col-3">Pseudo : <strong><?php echo $value->getUsername();?></strong></p>
                        <div class="col-6"></div>
                        <p class="col-3 text-right">publié le <?php echo $value->getDate(); ?></p>
                    </div>
                </div> 
                <div class="card-body text-center bg-white">
                    <p class="card-text">"<?php echo $value->getContent(); ?>"</p>
                </div>
                <div class="card-footer text-right">
                    <a href="http://localhost/blog_ecrivain/article/id/<?php echo $hydratedArticle->getId(); ?>/signaler/<?php echo $value->getId(); ?>" value="signaler">signaler</a>
                </div>
            </div>
    <?php } ?>
</div>





<?php $content = ob_get_clean(); ?>

<?php require 'templateFront.php'; ?>