<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $pagename; ?></title>
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
              integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
              crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="smtmovierentalstyle.css"/>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">SMT Movie Rental</h1>
                </div>
            </header>
            <nav class="row default">
                <div class="container-fluid">
                    <a href="../smt-movie-rental" class="btn btn-lg glyphicon glyphicon-home"></a>
                </div>
            </nav>
            <section class="row">
                <nav class="sidebar-nav col-lg-2">                        
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="../smt-movie-rental/advanced.php">Advanced Search</a></li>
                        <li><a href="../smt-movie-rental/title.php">Search by Title</a></li>
                        <li><a href="../smt-movie-rental/genre.php">Search by Genre</a></li>
                        <li><a href="../smt-movie-rental/year.php">Search by Year</a></li>
                        <li><a href="../smt-movie-rental/rating.php">Search by Rating</a></li>
                    </ul>
                </nav>