<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PHP array</title>

</head>

<body>
    <form action="hotel.php" method="GET">
        <div class="container w-50 mt-5 border rounded-5 d-flex flex-column align-items-center ">
            <div class="w-100 p-5">
                <div class="mb-3 d-flex flex-column align-items-center">
                    <div class="form-check w-50">
                        <input class="form-check-input" type="checkbox" name="parking" id="parking">
                        <label class="form-check-label" for="parking">
                            Con parcheggio
                        </label>
                    </div>
                    <div class="form-check w-50">
                        <input class="form-check-input" type="checkbox" name="controlStars" id="controlStars">
                        <label class="form-check-label" for="controlStars">
                            Valutazione Stelle
                        </label>
                    </div>
                </div>
                <div class="mb-3 d-flex flex-column align-items-center">
                    <label for="customRange2" class="form-label">Vote 1 or 5 stars</label>
                    <div style="width: calc(100% / 6);" class="d-flex justify-content-between w-50">
                        <p class="">0</p>
                        <p class="">1</p>
                        <p class="">2</p>
                        <p class="">3</p>
                        <p class="">4</p>
                        <p class="">5</p>
                    </div>
                    <input type="range" class="form-range w-50" min="0" max="5" name="rangeStar" id="customRange2">
                </div>
            </div>
            <div class="w-50 d-flex justify-content-center">
                <button type="submit" class="btn bg-success m-3">
                    Invio
                </button>
            </div>
        </div>
    </form>

    <div>
        <?php
        // echo json_encode($hotels);
        // foreach ($hotels as $hotel) {
        //     echo $hotel["name"] . '<br>';
        //     echo $hotel["description"] . '<br>';
        //     echo $hotel["parking"] . '<br>';
        //     echo $hotel["vote"] . '<br>';
        //     echo $hotel["distance_to_center"] . '<br>';
        // print_r($hotel);
        // print_r(array_values($hotel));
        // foreach ($hotel as $key => $value){
        //     echo $key . "<br>";
        // }
        // }
        ?>
    </div>
</body>

</html>