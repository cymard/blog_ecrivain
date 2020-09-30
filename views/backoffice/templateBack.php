<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title><?php echo $title ?></title>
        <?php echo $other ?>
    
    </head>
    <body>
        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg  navbar-light bg-primary ">
            <a class="navbar-brand text-white" href="http://localhost/blog_ecrivain/admin/accueil">Accueil</a>

            <a class="nav-link text-white" href="http://localhost/blog_ecrivain/admin/creer">Creer</a>

            <a class="nav-link text-white" href="http://localhost/blog_ecrivain/admin/signaler">Signaler</a>

        </nav>

        <!-- content -->
        <?php echo $content ?>
    </body>
</html>