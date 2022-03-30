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
        <title>About PawPawthway - Find Lost Dogs Through Twitter.</title>
    <meta name="description" content="Get to know the why's and how's of PawPathway. A totally free lost dog registry that scans Twitter for lost dogs.." />
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
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
        
        <div class="container container-fluid">
            <h1>About</h1>
            <p>PawPathway is a lost dog registry that scans twitter for mentions of lost dogs. We, with the original authors permission, repost information on our <a href=twitter.com/PawPathway>Twitter</a> and website.
            The goal is to repost with relevant and key information someone looking for a lost dog would search in Google, and other web browsers. This is because, generally, Twitter posts don't have enough key terms put together to get picked up very well or the key terms pick up information
            that is less useful when finding lost dogs. When you look up "lost dog" on twitter, many posts are about the loss of life for recent pets, or lost pets being found. While this information IS important and heartwarming it muddies the water for an owner looking for their pet.
            We seek to help streamline that process and spread the word further than Twitter.
            </p>
            <br>
            <p>If you have any issues with the service that you would like us to know about please DM us, or email help@pawpathway.org. If you received a reply from us, for a post not about lost dogs we sincerely apologize for the inconvenience.</p>
            <br>
            <p>PawPathway is and always will be a totally free service. It is a generally low cost service to run as well so we are not looking for donations at this time. If you would like to help please share, like, and retweet our lost dog notices.</p>
            <br>
            <p>We sincerely hope you have great success finding your lost dog, whethere it be through our service or other. But, if you found success using PawPathway PLEASE PLEASE PLEASE let us know!</p>
            <br>
            <p><b>Why not other animals?</b></p>
            <p>Great question! At this time, we are developing registrys for other animals. Because this is a free service, we code when we get the time and it has been tough lately. However, cats should be coming soon. Thanks!</p>
            <br>
            <p><b>With love from PawPathway, we hope your furry friend is returned to you soon. Good luck!<b></p>
            <br>
            <p><b>To add to the registry just reply to one of our tweets in this format: city name, zipcode, breed, description, turned over to animal control? (Y/N).<p>
            <br>
        </div>        

    </div><!-- main -->

    <footer>
        <div class="container container-fluid footer">
            <p class="text-center">PawPathway is a free service. With any issues or questions please email help@pawpathway.org</p>
            <P class="text-center">If this service has helped you in any way, please DM us on Twitter or email help@pawpathway.org. Thanks! </p>
        </div>
    </footer>
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>