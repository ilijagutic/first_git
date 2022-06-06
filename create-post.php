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

<header>
<?php include_once "./template/header.php" ?>
    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <h2 class="title">Create Post</h2>
                <form class="form" method="POST" action="create-post.php">

                    <div class="form-group">
                        <label>Naslov</label>
                        <input class="form-control" type="text" name="title" required>
                    </div>
                    <div class="form-group">
                        <label>Sadrzaj</label>
                        <textarea class="form-control" name="content" rows="10" required></textarea>
                    </div>
                    <button class="btn btn-primary">Dodaj post!</button>
                </form>
            </div><!-- /.blog-main -->
            <?php include_once "./template/sidebar.php" ?>
            <!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
    <?php include_once "./template/footer.php"?>


    </body>
</html>