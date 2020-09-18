<?php

$title = "commentaires";

$other = "";
ob_start();

// contenu body
?>
<div class="container">
    <?php foreach($result as $value){ ?>
        
            <div class="card bg-light mt-3">
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
                    <form action="http://localhost/blog_ecrivain/admin/commentaire/supprimer/<?php echo $value->getId(); ?>" method="POST">
                        <input class="btn btn-outline-danger" type="submit" value="supprimer">
                    </form>
                </div>
            </div>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require 'templateBack.php';

?>