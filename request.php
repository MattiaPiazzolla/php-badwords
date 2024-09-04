<!-- PHP that will the the information from the form -->
<?php
    $paragraph = $_GET["paragraph"];
    $badword = $_GET["badword"];
    // Reolace the badword with *** inside paraghtaph 
    $new_paragraph = str_replace($badword, "***", $paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP request</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5 text-center">
                <p><?php echo $new_paragraph ?></p>
            </div>
        </div>
    </div>
</body>
</html>