<?php include_once('db.php');
?>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $pol = $_POST['pol'];
    $sql = "INSERT INTO author (
            ime, prezime, pol)
            VALUES ('$ime', '$prezime','$pol')";
    $statement = $connection->prepare($sql);
    $statement->execute();
    header("Location: posts.php");
};
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

<?php include_once "./template/header.php" ?>
    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <h2 class="title">Napravi profil autora </h2>
                <form class="form" method="POST" action="create-author.php">

                    <div class="form-group">
                        <label>Ime</label>
                        <input class="form-control" type="text" name="ime" required>
                    </div>
                    <div class="form-group">
                        <label>Prezime</label>
                        <input class="form-control" name="prezime" required></input>
                    </div><br>
                    <div class="gender-wrapper">
                        <legend>Pol:</legend>
                        <label for="musko">M</label><input class="form-control" name="pol" type="radio" value="musko" id="musko" required></input><br><br>
                        <label for="zensko">Ž</label><input class="form-control" name="pol" type="radio" value="zensko" id="zensko" required></input>    
                    </div><br>
                    <button class="btn btn-primary" type="submit">Dodaj autora!</button>
                </form>

            </div><!-- /.blog-main -->
            <?php include_once "./template/sidebar.php" ?>
            <!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
    <?php include_once "./template/footer.php"?>


    </body>
</html>