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



                echo"<h2> Weather in $cityname , $country </h2>";
                echo"<p>localtime : $localtime </p>";
                echo"<p>Temperature : $temperature </p>";
                echo"<p>humidity : $humidity </p>";
                echo"<p>Wind Speed : $windSpeed </p>";
                echo"<p>Condition  : $condition </p>";
                echo"<p>pressure  : $pressure_mb</p>";
                echo "<a href='home.php'> <button> Home </button> ";
            }
            else{
                echo "Error in Fetching Data";
            }
        }
        else{
            echo "Error in Response";
        }
    }
    else{
        echo "City name is not Empty";
    }
}








?>