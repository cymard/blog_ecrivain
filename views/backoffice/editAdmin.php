<?php
$title = "modification de l\'article";
ob_start();
// contenu head
?>

<script src="https://cdn.tiny.cloud/1/i9vxlu7bi7fg25c1lmpw499gw3cy7ldoilwv66hhpjgpaqoj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


<?php 
$other = ob_get_clean();
ob_start();
// contenu body
?>



<form action="http://localhost/blog_ecrivain/admin/edit/article/<?php echo $hydratedArticle->getId();?>" method="POST">
  <br>
  <div class="input-group mt-3" style="width: 80%; margin: 0 auto;">
    <div class="input-group-prepend" >
      <label for="title"  class="input-group-text">Titre : </label>
    </div>
    <input class="form-control" type="text" id="title" name="title" value="<?php echo $hydratedArticle->getTitle(); ?>" required>
  </div>
  <br>
  <br>
  <textarea id="mytextarea" name="content" ><?php echo $hydratedArticle->getContent(); ?></textarea>
  <br>
  <br>
  <input class="btn btn-primary btn-lg btn-block" style="width: 80%; margin: 0 auto;" type="submit" value="Modifier">
</form>

<script>
    tinymce.init({
      selector: '#mytextarea',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      language: 'fr_FR',
      height: 600,
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:20px }',
    });
</script>


<?php 
$content = ob_get_clean();
require 'templateBack.php';
?>
