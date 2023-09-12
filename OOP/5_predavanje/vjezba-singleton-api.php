<?php

class WeatherApi
{
    private $apiKey;
    private static $instance;

    private function __construct()
    {
        $this->apiKey = "b53c250c235433fd7398a32690db73cc";
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new WeatherApi();
        }

        return self::$instance;
    }

    //dobivanje podataka putem API-a
    public function dohvatiPodatke($city)
    {
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$this->apiKey";
        $odgovor = file_get_contents($url);
        $data = json_decode($odgovor);

        //provjera odgovora
        if ($data->cod === 200) {
            //dohvačanje podataka
            $temp = $data->main->temp;
            $opis = $data->weather[0]->description;

            return ["temperatura" => $temp,
                    "opis" => $opis];
        } else {
            throw new Exception("Došlo je do pogreške kod dohvata podataka");
        }
    }   
}


$api = WeatherApi::getInstance();

try {
    $city = "Zagreb";
    $weatherData = $api->dohvatiPodatke($city);

    echo "Temperatura je: " . $weatherData["temperatura"] . "\n";
    echo "Vremenski uvijeti su: " . $weatherData["opis"] . "\n";
} catch (Exception $e) {
    echo $e->getMessage();
}
