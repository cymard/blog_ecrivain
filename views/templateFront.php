<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php echo $other ?>
    </head>
    <body>


        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

            <a class="navbar-brand" href="http://localhost/blog_ecrivain/">Navbar</a>    <!-- logo -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/blog_ecrivain/accueil">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>



        <!-- content -->
        <?php echo $content ?>








        <!-- footer -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary sticky-bottom py-5">
            <p>footer</p>
        </nav>

    </body>
</html>