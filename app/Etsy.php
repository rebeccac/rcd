<?php namespace App;

class Etsy {

    function __construct() {
    }

    function getListings() {
        // Define API Key
        define('API_KEY', 'fw08d5q91kdnp7a0bgn9z35k');
        $url = "https://openapi.etsy.com/v2/shops/RebeccaCordingley/listings/active?method=GET&api_key=". API_KEY."&fields=title,url,description,price,materials&includes=MainImage";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_body = curl_exec($ch);

        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        return $listings = json_decode($response_body, true);
    }

    function getRandomElement($listings) {
        return $element = rand(0,count($listings['results']));
    }

// $json = json_encode($response, JSON_PRETTY_PRINT);
}


 ?>
