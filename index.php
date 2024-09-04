<!-- PHP -->
 <?php


 ?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-5">PHP Badwords</h1>
                <form action="./request.php" method="GET" class="d-flex justify-content-center flex-column">
                    <label for="paragraph" class=" fw-bold">Inserisci un paragrafo:</label>
                    <textarea id="paragraph" class=" w-100 rounded-1 border-1" name="paragraph" rows="10" cols="100" required></textarea>
                    
                    <label for="badword" class="fw-bold">Parola da censurare:</label>
                    <input type="text" id="badword" name="badword" class="rounded-1 border-1" required>
                    <button type="submit" value="Invia" class="btn btn-primary mt-3">Invia</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>