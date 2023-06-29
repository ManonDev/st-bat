<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./design/sass_css/defaults.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
        <title>ST-BAT</title>
        <link rel="icon" type="image/ico" href="../pictures/favicon.png">
    </head>
    <body>
        <div class="container-fluid" id="main">
         <?PHP include 'header.html' ?>
        </div>
        <script type="module" src="../node_modules/bootstrap/"></script>
 
        <script type="module">
            import * as Popper from "@popperjs/core"
        </script>
        <script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>
        <script type="importmap">
            {
            "imports": {
                "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/esm/popper.min.js",
                "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.esm.min.js"
            }
            }
        </script>
        <script type="module">
            import * as bootstrap from 'bootstrap'

            new bootstrap.Popover(document.getElementById('popoverButton'))
        </script>
    </body>
</html>