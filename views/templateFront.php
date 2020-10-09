<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/9dd3a3cdbc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">   
        <?php echo $other ?>
    </head>
    <body>


        <!-- header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #444;">
                <a class="navbar-brand" href="http://localhost/blog_ecrivain/accueil"><i class="fas fa-home"></i> Accueil</a>
            </nav>
        </header>                                              

        <!-- content -->
        <main>
            <?php echo $content ?>
        </main>

        <!-- footer -->
        <footer>
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-bottom py-5"></nav>
        </footer>


    </body>
</html>