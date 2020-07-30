<?php

// Get configuration
require('config.php');

/**
 * Function for getting the json data out of a file
 */
function get_json_data($file) {
    return json_decode(file_get_contents($file));
}

function get_local_data() {
    $file = 'data/gifs.json';
    if (file_exists($file)) {
        return get_json_data($file);
    }
    return null;
}
/**
 * Function for formatting the data returned from giphy
 */
function map_giphy_data($entry) {
    return $entry->images->original->url;
}

/**
 * Function for requesting more gifs from the giphy api
 */
function get_gifs_from_giphy() {
    global $giphy_api_key;
    
    // Get gifs
    $url = "https://api.giphy.com/v1/gifs/search?api_key=$giphy_api_key&q=no&limit=25&offset=0&lang=en&rating=r";
    $giphy_data = get_json_data($url)->data;
    // Format the data returned
    $gifs = array_map('map_giphy_data', $giphy_data);
    return $gifs;
}

/**
 * Function for getting the gifs
 */
function get_gifs() {
    $today = date('Y/m/d');
    $local_gifs = get_local_data();

    // See if we haven't updated our local storage today
    if (!$local_gifs || $local_gifs->created_at !== $today) {
        // Grab new gifs from giphy
        $giphy_gifs = get_gifs_from_giphy();
        
        // Update data
        $local_gifs = (object) array(
            'gifs' => $giphy_gifs,
            'created_at' => $today,
        );
        
        // Update local storage
        $file = fopen('data/gifs.json', 'w');
        fwrite($file, json_encode($local_gifs));
        fclose($file);
    }
    return $local_gifs->gifs;
}

/**
 * Function for getting a random gif from the gif storage
 */
function get_random_gif() {
    $gifs = get_gifs();
    return $gifs[array_rand($gifs)];
}
