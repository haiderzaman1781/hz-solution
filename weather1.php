<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />


    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
            .btn{
                background-color: gray;
                border: 1px solid gray;
            }
            .btn:hover{
                transition: all 0.7s;
                background-color: transparent;
                color:black;
                border:1px solid gray;
            }
        </style>
</head>

    <body>
        <main>
            <div class="container text-center col-5 my-5 ">
            <h2>Weather Information</h2>
            <form action="" method="post" class="form-control">
                <label for="city"  class="">Enter City Name:</label>
                <input type="text"  class="form-control my-3" placeholder="Enter Your City name" id="city" name="city" required>
                <button type="submit"  class="btn">Get Weather</button>
            </form>
        </div>
        <div class="text-center">
            
            <a href="home.php" class="btn">Home</a>
        </div>
        </main>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';
    if (!empty('city')) {
        $apiurl = "http://api.weatherapi.com/v1/current.json?key=6efe206782ab4d388b074730240907&q=" . urlencode($city) . "&aqi=yes";

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $apiurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        curl_close($ch);
        if ($response) {
            $data = json_decode($response, true);

            if ($data && isset($data['current'])) {
                $location = $data['location'];
                $current = $data['current'];

                // Extract required data
                $pressure_mb = $current['pressure_mb'];
                $cityname = $location['name'];
                $country = $location['country'];
                $localtime = $location['localtime'];
                $temperature = $current['temp_c'];
                $condition = $current['condition']['text'];
                $humidity = $current['humidity'];
                $windSpeed = $current['wind_kph'];
                $pressure_mb = $current['pressure_mb'];



                ?>
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h2 class="text-center">Weather in <?php echo "$cityname, $country"; ?></h2>
                            <p class="text-center">Local Time: <?php echo $localtime; ?></p>
                            <p class="text-center">Temperature: <?php echo $temperature; ?>°C</p>
                            <p class="text-center">Humidity: <?php echo $humidity; ?>%</p>
                            <p class="text-center">Wind Speed: <?php echo $windSpeed; ?> km/h</p>
                            <p class="text-center">Condition: <?php echo $condition; ?></p>
                            <p class="text-center">Pressure: <?php echo $pressure_mb; ?> mb</p>
                            <div class="text-center">
                                <a href="weather.html">
                                    <button class="col-4 btn">Back</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Weather information',
                        text: 'Here is your city weather Information.'
                    })
                </script>
                
                <?php
            } else {
                ?>
                <script>
                    Swal.fire({
                        icon: "question",
                        title: 'Invalid Input',
                        text: 'Please check your spellings and city name.'
                    }).then(function () {
                        window.location = 'weather1.php';
                    });
                </script>
                <?php
            }
        } else {
            echo "Error in Response";
        }
    } else {
        echo "City name is not Empty";
    }
}








?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
