<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .card-body {
            max-height: 10rem;
            min-height: 10rem;
        }

        li {
            max-height: 5rem;
            min-height: 5rem;
        }
    </style>
</head>

<body>
    <!--=======================
        PHP ARRAY and General START
    ========================-->
    <?php
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    // controlli filtri
    $checkParking = false;
    $checkStarts = false;

    $parkingControl = $_GET["parking"];
    $starsControl = $_GET["controlStars"];
    $rangeStars = $_GET["rangeStar"];

    if ($starsControl) {
        $checkStarts = true;
    } else {
        $checkStarts = false;
    }

    // $stars = $_GET["range"];
    // echo $stars;

    if ($parkingControl) {
        $checkParking = true;
    } else {
        $checkParking = false;
    }

    ?>
    <!--=======================
        PHP ARRAY and General END
    ========================-->

    <!--=======================
        HOTEL CARD START
    ========================-->

    <h1>Lista degli Hotel</h1>
    <div class="d-flex">
    <?php
        foreach ($hotels as $hotel) {
    ?>
        <!--======================= FILTRO PARCHEGGIO E STELLE ====================-->
        <?php
            if ($checkStarts && $checkParking && $hotel['vote'] == $rangeStars && $hotel['parking']) {
        ?>
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        Titolo hotel <br>
                        <?php echo $hotel['name'] ?>
                    </h5>
                    <p class="card-text">
                        Descrizione hotel. <br>
                        <?php echo $hotel['description'] ?>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Parcheggio : <br>
                        <?php echo $hotel['parking'] ?>
                    </li>
                    <li class="list-group-item">
                        Voto : <br>
                        <?php echo 'voto: ' . $hotel['vote'] ?>
                    </li>
                    <li class="list-group-item">
                        Distance to center : <br>
                        <?php echo $hotel['distance_to_center'] . ' km' ?>
                    </li>
                </ul>
            </div>
        
        <!--======================= FILTRO STELLE ====================-->
        <?php
            } else if ($checkStarts && $hotel['vote'] == $rangeStars && !$checkParking) {
        ?>
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        Titolo hotel <br>
                        <?php echo $hotel['name'] ?>
                    </h5>
                    <p class="card-text">
                        Descrizione hotel. <br>
                        <?php echo $hotel['description'] ?>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Parcheggio : <br>
                        <?php echo $hotel['parking'] ?>
                    </li>
                    <li class="list-group-item">
                        Voto : <br>
                        <?php echo 'voto: ' . $hotel['vote'] ?>
                    </li>
                    <li class="list-group-item">
                        Distance to center : <br>
                        <?php echo $hotel['distance_to_center'] . ' km' ?>
                    </li>
                </ul>
            </div>

        <!--======================= FILTRO PARCHEGGIO ====================-->
        <?php
            } else if ($hotel['parking'] && $checkParking && !$checkStarts) {
        ?>
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        Titolo hotel <br>
                        <?php echo $hotel['name'] ?>
                    </h5>
                    <p class="card-text">
                        Descrizione hotel. <br>
                        <?php echo $hotel['description'] ?>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Parcheggio : <br>
                        <?php echo $hotel['parking'] ?>
                    </li>
                    <li class="list-group-item">
                        Voto : <br>
                        <?php echo 'voto: ' . $hotel['vote'] ?>
                    </li>
                    <li class="list-group-item">
                        Distance to center : <br>
                        <?php echo $hotel['distance_to_center'] . ' km' ?>
                    </li>
                </ul>
            </div>
        
            <!--======================= NO FILTRI ====================-->
        <?php
            } else if (!$checkParking && !$checkStarts) {
        ?>
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        Titolo hotel <br>
                        <?php echo $hotel['name'] ?>
                    </h5>
                    <p class="card-text">
                        Descrizione hotel. <br>
                        <?php echo $hotel['description'] ?>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Parcheggio : <br>
                        <?php echo $hotel['parking'] ?>
                    </li>
                    <li class="list-group-item">
                        Voto : <br>
                        <?php echo 'voto: ' . $hotel['vote'] ?>
                    </li>
                    <li class="list-group-item">
                        Distance to center : <br>
                        <?php echo $hotel['distance_to_center'] . ' km' ?>
                    </li>
                </ul>
            </div>
        <?php
            }
        ?>

        <?php
        }
        ?>

    </div>




</body>

</html>