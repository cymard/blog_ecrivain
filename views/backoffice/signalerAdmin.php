

<?php $title = 'Les commentaires signalés' ?>

<?php 
$other = '';
ob_start();
?>

<h2 class="text-center mt-4">les commentaires signalés : </h2>


    <div class="container">
        <?php foreach($data as $value){ ?>
            
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
                    <div class="card-footer">
                        <div class="row">
                            <a class="btn btn-outline-success col-3" href="http://localhost/blog_ecrivain/admin/ignorer/<?php echo $value->getId(); ?>">ignorer</a>
                            <div class="col-6"></div>
                            <form class="col-3 pr-0 pl-0" action="http://localhost/blog_ecrivain/admin/commentaire/supprimer/<?php echo $value->getId(); ?>" method="POST">
                                <input class="btn btn-outline-danger col-12" type="submit" value="supprimer">
                            </form>
                        </div>
                    </div>
                </div>
        <?php } ?>
    </div>



<?php 
$content = ob_get_clean();
require 'templateBack.php';

?>

