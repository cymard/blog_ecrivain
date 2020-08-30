<?php ?>

<?php
$title = 'accueil admin';
$other = '';
ob_start();
?>

<br>
<div class="table-responsive">
    <table class="table table-bordered ">
        <tr>
            <th>Titre</th>
            <th>Date</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>

        <?php foreach($data as $value){ ?>
        <form action="supprimer/<?php echo $value->getid(); ?>" method="DELETE">
            <tr>
                <td><?php echo $value->getTitle();?></td>
                <td><?php echo $value->getDate();?></td>
                <td><a class="btn btn-primary mb-3 text-uppercase"  href="#" value="Modification">Modifier</a></td>
                <td><input class="btn btn-danger mb-3 text-uppercase" type="submit" value="Supprimer" /></td>
            </tr>
        </form>
        <?php } ?>
    </table>
</div>
<br>



<?php 
$content = ob_get_clean();
require 'templateBack.php';
?>


