<?php
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="noindex">
  
    <title>Dubrovnik holidays - page not found</title>
    <meta content="Error 404 - this website has not been found." name="description">
    <meta content="404, not found, error" name="keywords">
  
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="preload" as='style'>
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/myStyle.css" rel="stylesheet">
    <link href="css/404.css" rel="stylesheet">

</head>

<body class="text-center">
  
    <div id="preloader"></div>

    <div id="header">
        <h2>Dubrovnik holidays</h2>
        <h1>Adriatic's finest accommodations</h1>
    </div>
    
    <div id="valovi">
    </div>

    <div id="notFound404">
        <div id="content">
            <h1>404</h1>
            <h2>We can't seem to find that.</h2>
            <h3>Are you sure you have the right address?</h3>
            <div>
                <a href="/" class="btn btn-primary" >Go home</a>
            </div>
        </div>
    </div>
   

    <script>
        let preloader = document.getElementById('preloader');
        window.addEventListener('load', () => {
            preloader.remove();
        });
    </script>

</body>

</html>