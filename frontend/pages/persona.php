<?php
global $title;
global $seperator;
global $description;
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title><?= $title.$seperator.$description?></title>
    </head>
    <body>
        <!-- header/navbar -->
            <?php require_once("frontend/pages/components/navbar.php"); ?>
        <!-- end of header/navbar -->
        <main>
            <h1>Persona</h1>
    
        </main>
      <!-- footer -->
            <?php require_once("frontend/pages/components/footer.php"); ?>
     <!-- end of footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
