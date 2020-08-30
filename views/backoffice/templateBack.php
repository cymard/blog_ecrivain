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
            <a class="navbar-brand text-white" href="./accueil">Accueil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="./creer">Creer<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- content -->
        <?php echo $content ?>
    </body>
</html>