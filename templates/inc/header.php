<!DOCTYPE html>
<html>
    <head>
        <title>Job Lister</title>
        <link rel="stylesheet" href="bootswatch/bootstrap.min.css">
        
        <!--Fontawesome-->
        <script
        src="https://kit.fontawesome.com/52339f9582.js"
        crossorigin="anonymous"
        ></script>
        <!--favicon-->
        <link rel="shortcut icon" type="image/png"  href="./img/favicon_io/logo-makr.png"/>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!--extra style-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><?php echo SITE_TITLE; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">Create Listing</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> 
                </div>
            </div>
        </nav>

        <!-- WE DON'T add an ending body and html tag because this is the header this two tag will be inside the footer -->