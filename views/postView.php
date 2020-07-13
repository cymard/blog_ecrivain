<?php $title = 'post'; ?>

<?php $other = ''; ?>

<?php ob_start(); ?>



<div class="card text-center">
    <div class="card-body">
        <h3 class="card-title text-uppercase"><?php echo $data['title'];?></h3>
        <p class="card-text "><?php echo $data['content']; ?></p>
    </div>
    <div class="card-footer text-muted">
        <?php echo 'publié le '.$data['date'];?>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>