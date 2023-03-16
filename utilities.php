<?php

function getShortText($longText) {
    $splitedText = str_split($longText);
    $shortText = array_slice($splitedText, 0, 150);
    return join("", $shortText). "...";
}

/**
 * This function get a url and return a trimed one
 * @param {URL}
 * @return {Trimed and replaced URL}
 */
function handleVideoLink($link) {
    $findLink = explode(" ", $link);
    $trimedLink = trim($link);
    return str_replace('watch?v=', "embed/", $trimedLink);
}


?>