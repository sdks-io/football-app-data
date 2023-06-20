<?php

require_once "vendor/autoload.php";

use SoccerV3ScoresLib\SoccerV3ScoresClientBuilder;
use SoccerV3ScoresLib\Exceptions\ApiException;
use SoccerV3ScoresLib\Models\FormatEnum;

$format = FormatEnum::JSON;
$api_key = '384f9c27128942d5b233a168492db568';

$client = SoccerV3ScoresClientBuilder::init()
    ->ocpApimSubscriptionKey($api_key)
    ->build();

try {
    $result = $client->getAPIController()->competitionsLeagues($format);
} catch (ApiException $e) {
    echo 'Caught ApiException: ',  $e->getMessage(), "\n";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Soccer-v3-Scores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>

<body>
    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="/soccer-v3-scores" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                        <!-- <img src="./assets/images/logo.png" width="150" height="32" class="me-2" viewBox="0 0 118 94" alt=""> -->
                        <title>Soccer-v3-Scores</title>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="fs-4">Soccer-v3-Scores</span>
                </a>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">Football Data App</h1>
                <p class="fs-5 text-body-secondary">Choose one of the leagues below to view their data.</p>
            </div>
        </header>
        <main>
            <div class="row row-cols-2 row-cols-md-4 mb-3 text-center">
                <?php
                    foreach ($result as $key => $data) {
                        $roundId = $data->getSeasons()[0]->getRounds()[0]->getRoundId();
                        $seasons = $data->getSeasons();
                        foreach ($seasons as $key => $season) {
                            if ($season->getCurrentSeason() || $season->getSeason() == "2023") {
                                $roundId = $season->getRounds()[0]->getRoundId();
                                break;
                            }
                        }
                ?>
                <a href='<?= "league-table.php/" . $data->getCompetitionId() . "/" . $roundId ?>' style="text-decoration:none; cursor:pointer">
                    <div class="col p-3">
                        <div class="card custom-card" style="width: 18rem;">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body">
                                <h5 class="card-title"><?= $data->getName() ?></h5>
                                <p class="card-text"><?= $data->getAreaName() ?></p>
                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                            </div>
                        </div>
                    </div>
                </a>
                <?php
                    }
                ?>
            </div>
        </main>
    </div>
</body>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col mb-0 text-muted">This app uses api's provided by <a href="https://sportsdata.io/">sportsdata.io</a>. The makers of this app have no association with <a href="https://sportsdata.io/">sportsdata.io</a>.</p>
</footer>

</html>