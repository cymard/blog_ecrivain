<?php
$title = "creer un article";
ob_start();
// contenu head
?>
<script src="https://cdn.tiny.cloud/1/i9vxlu7bi7fg25c1lmpw499gw3cy7ldoilwv66hhpjgpaqoj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<?php
$other = ob_get_clean();
ob_start();
// contenu body
?>

<form action="" method="POST">
  <br>
  <label for="title">Titre : </label>
  <input type="text" id="title" name="title">
  <br>
  <br>
  <textarea id="mytextarea" name="content">Saisissez le contenu de votre article</textarea>
  <br>
  <label for="date">Date : </label>
  <input type="date" name="date">
  <br>
  <br>
  <input type="submit" value="creer">
</form>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      language: 'fr_FR',
      height: 300,
      content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:20px }',
    });
</script>

<?php
$content = ob_get_clean();
require 'templateBack.php';
?>