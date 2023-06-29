<?php

$hotels = [
    [
        'id' => 1,
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'id' => 2,
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'id' => 3,
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'id' => 4,
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'id' => 5,
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

$hotels_filtered = [];

$filterActive = false;

//controllo che il GET si settato e non sia NULL
if ( isset($_GET['parking']) || isset($_GET['starsRank'])) {
    $filterActive = true;
} else {
    $filterActive = false;
};

// print_r("varDUMP parking " . $_GET['parking']);
// print_r("varDUMP starsRank " . $_GET['starsRank']);

//filtro gli hotel in base ai filtri ricevuti
if ($filterActive) {
    foreach ($hotels as $hotel) {
        if (isset($_GET['parking']) == 1 && $hotel['parking'] == false) {
            continue;
        };
        if ($hotel['vote'] < $_GET['starsRank']) {
            continue;
        };
        $hotels_filtered[] = $hotel;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <title>Php Hotel</title>
    <!-- add Bootstrap -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>

    <style>

    </style>
</head>

<body>
    <header class="bg-warning">
        <h1>Header</h1>
        <div class="container">
            <div class="row py-2">
                <div class="col d-flex align-items-center">
                    <p class="fw-bold pe-2 m-0">Filters :</p>
                    <!-- Creazione Form per invio dati -->
                    <form action="hotel.php" method="get" class="d-flex">
                        <!-- Creazione Select per il vote -->
                        <div class="d-flex align-items-center pe-3 border-end">
                            <label for="starsRank" class="pe-2">
                                Stars
                            </label>
                            <select name="starsRank" id="starsRank" class="form-select form-select-sm d-flex" aria-label=".form-select-lg example">
                                <!-- Ciclo for per creare le option -->
                                <?php for ($i = 1; $i <= 5; $i++) { ?>

                                    <option value="<?php echo $i ?>">
                                        <?php echo $i ?>
                                    </option>

                                <?php }  ?>

                            </select>
                        </div>
                        <!-- Creazione CheckBox per Parking -->
                        <div class="form-check d-flex align-items-center">

                            <label class="form-check-label pe-5" for="parking">
                                Parking
                            </label>

                            <input class="form-check-input" name="parking" type="checkbox" value="1" id="parking">
                        </div>
                        <!-- Creazione Bottoni per inviare i dati -->
                        <div class="px-3">
                            <button class="btn btn-success" type="submit">Submit</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </header>

    <main class="bg-primary">
        <h1>MAIN</h1>
        <table>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Stars</th>
                        <th scope="col">Distance to center</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- faccio un foreach su due array diversi controllati da una variabile d' appoggio -->
                    <?php foreach ( ($filterActive ? $hotels_filtered : $hotels) as $hotel ) {?>
                        <tr>
                            <!-- Stampo i vari hotel con i dati di cui ho bisogno -->
                            <th scope="row"> <?php echo $hotel['id'] ?> </th>

                            <td> <?php echo $hotel['name'] ?> </td>

                            <td> <?php echo $hotel['description'] ?> </td>

                            <td> 
                                <!-- Creo un operatiore ternario per controllare se l' hotel ha il parcheggio o no e lo segno con un SIMBOL -->
                                <?php echo ( $hotel['parking']) ? $hotel['parking'] = '&check;' : $hotel['parking'] = '&cross;';?> 
                            </td>

                            <td> <?php echo $hotel['vote'] ?> </td>

                            <td> <?php echo $hotel['distance_to_center'] . " km" ?> </td>

                        </tr>                     
                    <?php } ?>
                </tbody>
            </table>
        </table>
    </main>

</body>

</html>