<!-- PHP that will the the information from the form -->
<?php
    $paragraph = $_GET["paragraph"];
    $badword = $_GET["badword"];
    // Reolace the badword with *** inside paraghtaph 
    $new_word = str_replace($badword, "***", $paragraph);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP request</title>
</head>
<body>
    
</body>
</html>