<?php

$vardas = $_POST['vardas'];

$pavarde = $_POST['pavarde'];

$lytis = $_POST['radio'];

$miestas = $_POST['dropdown'];

$komentaras = $_POST['textarea'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="form.php" method="post">
        <div class="container">


            <div>
                <h5 class="card-title fs-2 text-center"><?php echo $vardas . " " . $pavarde; ?></h5>
                <hr>
                <p class="card-text ms-3"> <strong> Lytis: </strong> <?php echo $lytis; ?> <br> <br>
                    <strong>Į paskaitas važiuosiu su: </strong>
                    <?php

                    if (!empty($_POST['check_list'])) {
                        foreach ($_POST['check_list'] as $value) {
                            echo $value . '<br/>';
                        }
                    }

                    ?>
                    <br>
                    <strong>Kokiame mieste studijuojate: </strong><?php echo $miestas; ?> <br> <br>
                    <strong>Trumpai apie save: </strong><?php echo $komentaras; ?>
                </p>
                <div class="text-center">
                    <button>Atgal</button>
                </div>
            </div>

        </div>
        </div>
    </form>
</body>

</html>