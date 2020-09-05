<?php
$title = "creer un article";
ob_start();
// contenu head
?>
<script src="https://cdn.tiny.cloud/1/i9vxlu7bi7fg25c1lmpw499gw3cy7ldoilwv66hhpjgpaqoj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<?php
$other = ob_get_clean();
ob_start();

?>

<form action="http://localhost/blog_ecrivain/admin/creation" method="POST">
  <br>
  <label for="title">Titre : </label>
  <input type="text" id="title" name="title" style="width : 50%">
  <br>
  <br>
  <textarea id="mytextarea" name="content">Saisissez le contenu de votre article</textarea>
  <br>
  <br>
  <input type="submit" value="creer">
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