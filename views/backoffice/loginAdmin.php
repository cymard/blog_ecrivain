<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>admin</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://kit.fontawesome.com/9dd3a3cdbc.js" crossorigin="anonymous"></script>
    </head>
    <body>


        <div class="container border bg-light mt-5" >
            <form class="p-3" action="login" method="POST">

                <div class="form-group">
                    <label for="username">Login : </label>
                    <input class="form-control" type="text" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe : </label>
                    <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <input class="btn btn-secondary" type="submit" value="Valider">  
            </form>
        </div>
        
    </body>
</html>