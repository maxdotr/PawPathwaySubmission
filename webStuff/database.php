<?php
    
include('db.php');
include_once('functions.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawPawthway</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container container-md container-sm h-100" id="main">
        <section id="Navbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">PawPathway</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item select">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">Home</span></a>
                        </li>
                        <li class="nav-item select">
                            <a class="nav-link" href="about.php">About<span class="sr-only">About</span></a></a>
                        </li>
                        <li class="nav-item select">
                            <a class="nav-link" href="database.php">Database<span class="sr-only">Databse</span></a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" method="POST" action="search.php">
                        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search by zip/postal code" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                
                </div>
            </nav> <!-- end nav -->
        <section><!-- end navbar -->
    </div>
    <div class="container container-md container-sm h-100" id="main">
        <section id="table" class="p-3 pl-5 center-all">
                <h1>Recently Lost Dogs</h1>
                <table class="table table-responsive center-all pl-5">
                    <thead class="center-all thead-dark">
                        <tr>
                            <th><b>City</b></th>
                            <th><b>Zip/Postal Code</b></th>
                            <th><b>Breed</b></th>
                            <th><b>Description</b></th>
                            <th><b>With Animal Control?</b></th>
                            <th><b>Contact</b></th>
                            <th><b>Date Found</b></th>
                        </tr>
                    </thead>
                    <?php  

                    $doglist = find_dogs();

                    foreach ($doglist as $dog) :
                    ?>
                    <tr>
                        <td><?php echo($dog['cityName']) ?></td>
                        <td><?php echo($dog['zipPostal']) ?></td>
                        <td><?php echo($dog['breed']) ?></td>
                        <td><textarea disabled><?php echo($dog['description']) ?></textarea></td>
                        <td><?php echo($dog['animalControl']) ?></td>
                        <td><?php echo($dog['contact']) ?></td>
                        <td><?php echo($dog['date']) ?></td>
                    </tr>
                    <?php endforeach; ?>

                </table>
            </section><!-- end table -->
        </div>
    
    <footer>
        <div class="container container-fluid footer mb-0 p-3">
            <p class="text-center">PawPathway is a free service. With any issues or questions please email help@pawpathway.com</p>
            <P class="text-center">If this service has helped you in any way, please DM us on Twitter or email help@pawpathway.com. Thanks! </p>
        </div>
    </footer>

    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>